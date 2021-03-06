@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12 p-0" style="width: 100%;">

            <div style="padding-top: 25px;"><h4 class="project-title">Valentino Master of Couture, Somerset House - Exhibition design
                </h4></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/valentino/Valentino_6_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/valentino/Valentino_1_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/valentino/Valentino_2_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/valentino/Valentino_3_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/valentino/Valentino_4_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/valentino/Valentino_5_1x.jpg" class="scale-img"/>
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

                            <div id="text"><p class="overlay-heading">Valentino Master of Couture, Somerset House</p></div>
                            <div id="text"><p class="overlay-subheading">Exhibition Design</p></div>

                            <div style="padding-top: 20px;">
                                <div id="text">I worked on creating a bespoke typeface and exhibition graphics. The bespoke typeface took inspiration from Valentino’s ornamental details. The exhibition graphics took inspiration from vintage couture catwalk shows, whilst the captions where pinned onto fabric with dressmaking pins.
                                </div>
                            </div>

                            <br/>

                            <div id="text">
                                <h5>Deliverables</h5>
                                <p>Pitches</p>
                                <p>Concept design</p>
                                <p>Design development</p>
                                <p>Bespoke typography</p>
                                <p>Exhibition displays</p>
                                <p>Marketing materials</p>

                            </div>

                            <div id="text">
                                <h5>Role</h5>
                                <p>Graphic designer working on concept and design development</p>
                            </div>

                            <div id="text">
                                <h5>Studio</h5>
                                <p>Studio Frith</p>
                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>

    </div>



@endsection