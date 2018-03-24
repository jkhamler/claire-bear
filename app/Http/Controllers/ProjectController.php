<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{


    /**
     * A list of all projects - name, description and link to full project page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $projects = [
            // Add more of these below
            ['name' => 'Allude', 'url' => '/project/allude', 'thumbnail_path' => '/images/thumbnails/Allude.jpg'],
            ['name' => 'BMM', 'url' => '/project/bmm', 'thumbnail_path' => '/images/thumbnails/BMM.jpg'],
            ['name' => 'Curraghs', 'url' => '/project/curraghs', 'thumbnail_path' => '/images/thumbnails/Curraghs.jpg'],
            ['name' => 'FA England', 'url' => '/project/fa-england', 'thumbnail_path' => '/images/thumbnails/FA_England_Packaging.jpg'],
            ['name' => 'Girl Blue Dress', 'url' => '/project/girl-blue-dress', 'thumbnail_path' => '/images/thumbnails/Girl_Blue_Dress.jpg'],
            ['name' => 'History of Magic', 'url' => '/project/history-of-magic', 'thumbnail_path' => '/images/thumbnails/history_magic.jpg'],
            ['name' => 'Horniman', 'url' => '/project/horniman', 'thumbnail_path' => '/images/thumbnails/Horniman.jpg'],
            ['name' => 'Metamorphosis', 'url' => '/project/metamorphosis', 'thumbnail_path' => '/images/thumbnails/Metamorphosis.jpg'],
            ['name' => 'NT Biddulph', 'url' => '/project/nt-biddulph', 'thumbnail_path' => '/images/thumbnails/NT_Biddulph.jpg'],
            ['name' => 'NT Nostel', 'url' => '/project/nt-nostell', 'thumbnail_path' => '/images/thumbnails/NT_Nostell.jpg'],
            ['name' => 'RMG', 'url' => '/project/rmg', 'thumbnail_path' => '/images/thumbnails/RMG.jpg'],
            ['name' => 'Valentino', 'url' => '/project/valentino', 'thumbnail_path' => '/images/thumbnails/valentino.jpg'],
            ['name' => 'Viridor', 'url' => '/project/viridor', 'thumbnail_path' => '/images/thumbnails/viridor.jpg'],
        ];


        return view('project.index', [
            'projects' => $projects

        ]);
    }

    public function jaeger()
    {

        return view('project.jaeger', []);

    }

    public function waterstones()
    {

        return view('project.waterstones', []);

    }
}
