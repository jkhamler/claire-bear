<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return redirect('projects');
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
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-12.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-13.png'],
            ['name' => '', 'thumbnail_path' => '/images/clients/logo-14.png'],
        ];

        return view('home.about', [
            'clients' => $clients
        ]);
    }

}
