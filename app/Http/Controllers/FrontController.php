<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function about(){
        return view('frontend.pages.about.about');
    }

    public function products(){
        return view('frontend.pages.product.products');
    }

    public function services(){
        return view('frontend.pages.service.services');
    }

    public function projects(){
        return view('frontend.pages.project.projects');
    }


    public function blogs(){
        return view('frontend.pages.blog.blogs');
    }

    public function contact(){
        return view('frontend.pages.message.contact');
    }

    public function quotation(){
        return view('frontend.pages.message.quotation');
    }
}
