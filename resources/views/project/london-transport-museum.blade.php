@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12 p-0" style="width: 100%;">

            <div style="padding-top: 25px;"><h4 class="project-title">Designology, London Transport Museum - Exhibition Design</h4></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/london_transport_museum/LTM_1_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/london_transport_museum/LTM_2_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/london_transport_museum/LTM_3_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/london_transport_museum/LTM_4_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/london_transport_museum/LTM_5_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/london_transport_museum/LTM_6_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/london_transport_museum/LTM_7_1x.jpg" class="scale-img"/>
        </div>


        <div class="row">


        </div>

        <div class="d-flex justify-content-between">
            <div></div>
            <div>
                <a href="#"><i class="fas fa-chevron-circle-up fa-2x up-chevron"></i></a>
            </div>
        </div>

        <br/>


    </div>



    <div id="overlay" onclick="off()" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="off()">&times;</a>

        <div class="container-fluid">
            <div class="row" style="padding-top: 100px;">

                <div class="col-xs-1 col-sm-2 col-md-2 col-lg-3">

                </div>


                <div class="col-xs-10 col-sm-8 col-md-8 col-lg-6">

                    <div class="row align-items-center">


                        <div class="col">

                            <div id="text"><p class="overlay-heading">Designology, London Transport Museum</p></div>
                            <div id="text"><p class="overlay-subheading">Exhibition Design</p></div>

                            <div style="padding-top: 20px;">
                                <div id="text">Designology celebrated the influence of design on London transport. The concept came from the process of design – moodboards, sketchbooks and notes. The graphic language and arrangement of objects took inspiration from these visual cues.
                                </div>
                            </div>

                            <br/>

                            <div id="text">
                                <h5>Role</h5>
                                <p>Lead graphic designer working on concept and design development</p>
                            </div>

                            <div id="text">
                                <h5>Studio</h5>
                                <p>Easy Tiger Creative</p>
                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>

    </div>



@endsection