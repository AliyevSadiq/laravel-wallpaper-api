<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\WallPaper;


class WallPaperController extends Controller
{

    public function index(){

        $wallPaper = WallPaper::orderBy('id','desc');
        return response()->json($wallPaper->paginate(10),200);
    }
	
	public function select($id){
		return response()->json(WallPaper::select('id','image')->where('id','=',$id)->first(),200);
	}
	
	

    public function category(){
        //return response()->json(Category::select('id','title')->get(),200);
        return response()->json('1111',200);
    }

    public function selectByCategoryId($id){
        return response()->json(WallPaper::where('category_id','=',$id)->paginate('10'),200);
    }

}
