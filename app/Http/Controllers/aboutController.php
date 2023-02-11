<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class aboutController extends Controller
{
    function insertaboutdata(Request $req){
        $left_img = $req->file('left_img')->getClientOriginalName();
        $right_img = $req->file('right_img')->getClientOriginalName();
        $popup_video_url = $req->get('popup_video_url');
        $sec_title = $req->get('sec_title');
        $title = $req->get('title');
        $description = $req->get('description');
        $btn_url = $req->get('btn_url');

       

        $req->left_img->move(public_path('backend/assets/images/about'),$left_img);
        $req->right_img->move(public_path('backend/assets/images/about'),$right_img);

        $about = new about();

        $about->left_img = $left_img;
        $about->right_img = $right_img;
        $about->popup_video_url =$popup_video_url;
        $about->sec_title = $sec_title;
        $about->title = $title;
        $about->description = $description;
        $about-> btn_url =$btn_url;

        $about->save();
        return redirect('admin/homepage/about');
    }   

    function readboutdata(){
        $aboutdata =about::all();
        return view('backend.Home-page.about', ['aboutdata'=>$aboutdata]);
    }
    
    
}
