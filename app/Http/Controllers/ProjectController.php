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
            ['name' => 'Allude', 'description' => 'Exhibition Design', 'url' => '/project/allude', 'thumbnail_path' => '/images/thumbnails/Allude.jpg'],
            ['name' => 'BMM', 'description' => 'Exhibition Design', 'url' => '/project/bmm', 'thumbnail_path' => '/images/thumbnails/BMM.jpg'],
            ['name' => 'Curraghs', 'description' => 'Exhibition Design', 'url' => '/project/curraghs', 'thumbnail_path' => '/images/thumbnails/Curraghs.jpg'],
            ['name' => 'FA England', 'description' => 'Exhibition Design', 'url' => '/project/fa-england', 'thumbnail_path' => '/images/thumbnails/FA_England_Packaging.jpg'],
            ['name' => 'Girl Blue Dress', 'description' => 'Exhibition Design', 'url' => '/project/girl-in-a-blue-dress', 'thumbnail_path' => '/images/thumbnails/Girl_Blue_Dress.jpg'],
            ['name' => 'History of Magic', 'description' => 'Exhibition Design', 'url' => '/project/history-of-magic', 'thumbnail_path' => '/images/thumbnails/history_magic.jpg'],
            ['name' => 'Horniman', 'description' => 'Exhibition Design', 'url' => '/project/horniman', 'thumbnail_path' => '/images/thumbnails/Horniman.jpg'],
            ['name' => 'Metamorphosis', 'description' => 'Exhibition Design', 'url' => '/project/metamorphosis', 'thumbnail_path' => '/images/thumbnails/Metamorphosis.jpg'],
            ['name' => 'NT Biddulph', 'description' => 'Exhibition Design', 'url' => '/project/nt-biddulph', 'thumbnail_path' => '/images/thumbnails/NT_Biddulph.jpg'],
            ['name' => 'NT Nostel', 'description' => 'Exhibition Design', 'url' => '/project/nt-nostell', 'thumbnail_path' => '/images/thumbnails/NT_Nostell.jpg'],
            ['name' => 'RMG', 'description' => 'Exhibition Design', 'url' => '/project/rmg', 'thumbnail_path' => '/images/thumbnails/RMG.jpg'],
            ['name' => 'Valentino', 'description' => 'Exhibition Design', 'url' => '/project/valentino', 'thumbnail_path' => '/images/thumbnails/valentino.jpg'],
            ['name' => 'Viridor', 'description' => 'Exhibition Design', 'url' => '/project/viridor', 'thumbnail_path' => '/images/thumbnails/viridor.jpg'],
        ];


        return view('project.index', [
            'projects' => $projects

        ]);
    }

    public function allude()
    {
        return view('project.allude', [
        ]);
    }

    public function bmm()
    {
        return view('project.bmm', [
        ]);
    }

    public function curraghs()
    {
        return view('project.curraghs', [
        ]);
    }

    public function faEngland()
    {
        return view('project.fa-england', [
        ]);
    }

    public function girlInABlueDress()
    {
        return view('project.girl-in-a-blue-dress', [
        ]);
    }

    public function historyOfMagic()
    {
        return view('project.history-of-magic', [
        ]);
    }

    public function horniman()
    {
        return view('project.horniman', [
        ]);
    }

    public function metamorphosis()
    {
        return view('project.metamorphosis', [
        ]);
    }

    public function ntBiddulph()
    {
        return view('project.nt-biddulph', [
        ]);
    }

    public function ntNostell()
    {
        return view('project.nt-nostell', [
        ]);
    }

    public function rmg()
    {
        return view('project.rmg', [
        ]);
    }

    public function valentino()
    {
        return view('project.valentino', [
        ]);
    }

    public function viridor()
    {
        return view('project.viridor', [
        ]);
    }
}
