<?php

namespace App\Http\Controllers\Catalogimg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CatalogimgImage;

class ImagesimgController extends Controller
{
    public function index()
    {
    	$images = CatalogimgImage::all();
    	$images->each(function($images){
    		$images->article;
    	});

		return view('vadmin.images.index')->with('images', $images);
	}
	
	public function destroy(Request $request)
	{
		try {
			$record = CatalogimgImage::find($request->id);
			$record->delete();
				return response()->json([
					'success'   => true,
				]);  
				
			} catch (\Exception $e) {
				return response()->json([
					'success'   => false,
					'error'    => 'Error: '.$e
				]);    
			}
	}
}
