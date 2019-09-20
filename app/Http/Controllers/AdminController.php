<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    //
    public function admin()
    {
    	return view('home');
    }

    public function postNews()
    {
        return view('admin.post');
    }
    public function postAd()
    {
        return view('admin.ad');
    }
    
    public function saveAd(Request $request)
    {
    	$data=array();
        $data['title'] = $request->input('title');
        $data['link'] = $request->input('link');
        if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $name = time().'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('img');
	        $image->move($destinationPath, $name);
	        //dd($name);
	        $data['image'] = $name;
	        //$data['news_id'] = $request->input('news_id');
	        DB::table('img_news')->insert($data);
	        return redirect ('allpost');
	    }
	    else {
	        return view('blank_index');
	    } 
    }

    public function saveNews(Request $request)
    {
        $data=array();
        $data['title'] = $request->input('title');
        $data['date'] = $request->input('date');
        $data['pageno'] = $request->input('pageno');
        $data['category'] = $request->input('category');

        if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $name = time().'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path('newsimages');
	        $image->move($destinationPath, $name);
	        //dd($name);
	        $data['image'] = $name;
	        //$data['news_id'] = $request->input('news_id');
	        DB::table('news')->insert($data);
	        return redirect ('allpost');
	    }
	    else {
	        return view('blank_index');
	    } 
	}
	public function allpost() {
        $data = DB::table('news')->paginate(5);
        /*   dd($data);*/
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('admin.allpost',['data'=>$data]);
	    }
	}
}