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

        $clients = [
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-1.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-2.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-3.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-4.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-5.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-6.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-7.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-8.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-9.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-10.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-11.png'],
        ];

        return view('home.about', [
            'clients' => $clients
        ]);
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
