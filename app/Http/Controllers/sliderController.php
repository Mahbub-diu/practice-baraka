<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class sliderController extends Controller
{

    function insertSliderData(Request $req){
        $title = $req->get('title');
        $main_title =$req->get('main_title');
        $point1= $req->get('point1');
        $point2= $req->get('point2');
        $point3= $req->get('point3');
        $bg_img= $req->file('bg_img')->getClientOriginalName();
        
        
        $req->bg_img->move(public_path('backend/assets/images/slider'), $bg_img);


        $slider = new slider();
        $slider-> title = $title;
        $slider->main_title =$main_title;
        $slider->point1= $point1;
        $slider->point2= $point2;
        $slider->point3= $point3;
        $slider->bg_img =$bg_img;

        $slider->save();
        return redirect('admin/homepage/slider');

    }

    function readsliderdata(){
        $sliderdata = slider::all();

        return view('backend.Home-page.slider', ['sliderdata'=>$sliderdata]);
        
    }
}
