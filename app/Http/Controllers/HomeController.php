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

    public function contact()
    {

        return view('home.contact', []);
    }

    public function work()
    {

        $projects = [
            ['name' => 'Jaeger', 'description' => 'Blah blah blah', 'slug' => '/project/jaeger'],
            ['name' => 'Waterstone', 'description' => '123 345 456', 'slug' => '/project/waterstones'],
        ];


        return view('home.work', [
            'projects' => $projects

        ]);
    }


}
