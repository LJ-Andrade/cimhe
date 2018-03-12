<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogimgArticle extends Model
{
    protected $table = "catalogimg_articles";

    protected $fillable = ['name', 'category_id', 'user_id', 'thumb', 'status', 'slug'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
    	return $this->belongsTo('App\CatalogimgCategory');
    }

    public function images(){
    	return $this->hasMany('App\CatalogimgImage', 'article_id');
    }

    public function tags(){
    	return $this->belongsToMany('App\CatalogimgTag');
    }

    public function scopeActive($query){
        return $query->where('status', '1');
    }

    public function scopeSearch($query, $code=null, $name=null, $category=null)
    {   
        //dd($code." ".$name." ".$category);
        if($code != null && $name != null & $category != null)
        {
            return $query
            ->where('code', 'like', "%" . $code . "%")
            ->where('name', 'like', "%" . $name . "%")
            ->where('category_id', '=', $category);
            
        } elseif($name != null && $category != null)
        {
            return $query
                ->where('name', 'like', "%" . $name . "%")
                ->where('category_id', '=', $category);
        } elseif($code != null && $category != null)
        {
            return $query
            ->where('code', 'like', "%" . $code . "%")
            ->where('category_id', '=', $category);
        } elseif($name != null && $code != null)
        {
            return $query
            ->where('code', 'like', "%" . $code . "%")
            ->where('name', '=', $name);
        } elseif($code != null)
        {
            return $query->where('code', 'like', "%" . $code . "%");
        } elseif($name != null) 
        {
            return $query->where('name', 'like', "%" . $name . "%");
        } elseif($category != null)
        {
            return $query->where('category_id', '=', $category);
        }
    }

    public function scopeSearchtitle($query, $title)
    {
        return $query->where('name', 'LIKE', "%$title%");
    }

}
