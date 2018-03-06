<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            ['name' => 'Jaeger', 'description' => 'Blah blah blah', 'slug' => '/project/jaeger'],
            ['name' => 'Waterstone', 'description' => '123 345 456', 'slug' => '/project/waterstones'],
        ];


        return view('project.index', [
            'projects' => $projects

        ]);
    }
    public function jaeger(){

        return view('project.jaeger', []);

    }

    public function waterstones(){

        return view('project.waterstones', []);

    }
}
