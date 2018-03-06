<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {

        return view('home.index', []);
    }

    public function about()
    {

        return view('home.about', []);
    }

    public function contact(Request $request)
    {

//        echo '<pre>';
//        print_r($request->input('name'));
//        echo '</pre>';
//        exit;

        $emailSent = mail('jkhamler@gmail.com', 'Blah', 'SGSGSG');


    }


}
