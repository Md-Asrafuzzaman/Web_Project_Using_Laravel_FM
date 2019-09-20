<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PagesController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('news')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data' =>$data]);
        }
    }


    // public function index2()
    // {
    //     $data = DB::table('img_news')->where('title', 'airline')->paginate(1);
    //     if (count($data)>0) {
    //         //return view('admin.allpost',$data);
    //     return view('index',['data' =>$data]);
    // }

    // }
    public function about()
    {
    	return view('pages.about');
    }

    public function contuct()
    {
    	return view('pages.contact');
    }

    public function advertisement()
    {  	
    	return view('pages.ad');
    }

    public function editor()
    {  	
    	return view('pages.editor');
    }

    public function search(Request $request)
    {   
        $search = $request->search;
        $data = DB::table('news')->orwhere('category','like','%'.$search.'%')->orwhere('date','like','%'.$search.'%')->orwhere('title','like','%'.$search.'%')->paginate(3);
        $data->appends(['search' => $search]);

        if (count($data)>0) {
            //return view('admin.allpost',$data);
            //$count = (count($data));
            return view('pages.search',['data'=>$data]);

        }
        else
            return view('blank_index');
        
    }

    public function blank()
    {
        $data = DB::table('img_news')->where('title', 'airline')->paginate(1);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('blank_index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }


    public function calender(Request $request)
    {   
        $search = $request->search;
        $data = DB::table('news')->where('date','2019-07-31')->paginate(3);
        $data->appends(['search' => $search]);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            //$count = (count($data));
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }



}
