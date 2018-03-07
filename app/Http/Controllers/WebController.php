<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;
use App\Category;
use App\Tag;
use App\Contact;
use Mail;
use App\Mail\WebContactMail;

class WebController extends Controller
{

	public function __construct()
	{
		Carbon::setLocale('es');
	}

	public function home()
    {
        return view('web/web');
    }

	public function portfolio(Request $request)
	{
        $articles = Article::search($request->title)->orderBy('id', 'DESC')->where('status', '1')->paginate(12);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
		}); 
    	return view('web.portfolio.portfolio')
    		->with('articles', $articles);
    }

	public function searchCategory($name)
	{
		$category = Category::SearchCategory($name)->first();
		$articles=$category->article()->paginate(12);
		$articles->each(function($articles){
				$articles->category;
				$articles->images;
		});
		return view('web.portfolio.portfolio')->with('articles', $articles);
	}

    public function searchTag($name)
    {
        $tag = Tag::SearchTag($name)->first();
        $articles = $tag->article()->paginate(12);
        $articles->each(function($articles){
                $articles->category;
                $articles->images;
        });
        return view('web.portfolio.portfolio')->with('articles', $articles);
    }

    public function viewArticle($id)
    {
        $article = Article::find($id);
        $article->each(function($article){
                $article->category;
                $article->images;
                $article->tags;
                $article->colors;
        });
        return view('web.portfolio.article')->with('article', $article);
    }

    public function showWithSlug($slug) {

        $article = Article::where('slug', '=', $slug)->first();
        // dd($article);
        return view('web.portfolio.article')->with('article', $article);
    }

    public function contact()
    {  
        return view('contacto');
    }

	public function mail_sender(Request $request)
    {
		try{
			// Puede utilizarse POSTFIX para enviar mails pero suelen llegar a SPAM. Mejor usar GMAIL, ZOGO, MAILGUN, etc.
			$contact = new Contact();
			$contact->fill($request->all());
			$contact->save();
			$subject = 'Nuevo contacto desde la web';

			$data = $request->all();
			Mail::to(APP_EMAIL_TEST)->send(new WebContactMail($subject, $data));
			
			return response()->json(['response' => 1,
									 'error'    => '0']); 
		} catch(Exception $e) {
			return response()->json(['response' => 0,
									 'error'    => $e]); 
		}
	}		
}
