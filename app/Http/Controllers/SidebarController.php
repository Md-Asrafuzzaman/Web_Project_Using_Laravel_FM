<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SidebarController extends Controller
{
    //

    public function bangladesh()
    {   
        $data = DB::table('news')->where('category', 'Bangladesh')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');  
    }

    public function sports()
    {   

        $data = DB::table('news')->where('category', 'Sports')->paginate(3);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }

    public function international()
    {   

        $data = DB::table('news')->where('category', 'International')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }

    public function business()
    {   

        $data = DB::table('news')->where('category', 'Business')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }

    public function political()
    {   

        $data = DB::table('news')->where('category', 'Political')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }

    public function agriculture()
    {   

        $data = DB::table('news')->where('category', 'Agricultur')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }

    public function binodon()
    {   

        $data = DB::table('news')->where('category', 'Entertinement')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');     
    }
    

    public function city()
    {   
        $data = DB::table('news')->where('category', 'City')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }
    public function campus()
    {   
        $data = DB::table('news')->where('category', 'Campus')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }

    public function ad()
    {   

        $data = DB::table('news')->where('category', 'Advertisement')->paginate(2);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }

    public function frontAd()
    {   
        $data = DB::table('news')->where('title', 'khela')->paginate(1);
        if (count($data)>0) {
            //return view('admin.allpost',$data);
            return view('blank_index',['data'=>$data]);
        }
        else
            return view('blank_index');
        
    }

}
