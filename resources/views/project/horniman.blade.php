@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12 p-0" style="width: 100%;">

            <div style="padding-top: 25px;"><h4 class="project-title">Horniman Museum, The Music Room – Infographics</h4></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/horniman/Horniman_1_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/horniman/Horniman_2_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/horniman/Horniman_5_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/horniman/Horniman_3_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/horniman/Horniman_4_1x.jpg" class="scale-img"/>
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

                            <div id="text"><p class="overlay-heading">Horniman Museum, The Music Room</p></div>
                            <div id="text"><p class="overlay-subheading">Infographics</p></div>

                            <div style="padding-top: 20px;">
                                <div id="text">The music room at the Horniman Museum is one of my favourite galleries. I gathered information on all of the instruments on show at the gallery and arranged them into a  typographic Infographic. This was developed into museum interpretation, leaflets, and an app.
                                </div>
                            </div>

                            <br/>

                            <div id="text">
                                <h5>Deliverables</h5>
                                <p>Infographics</p>
                                <p>Visual identity</p>
                                <p>Interpretation design</p>
                                <p>Marketing materials</p>
                                <p>Digital application</p>
                            </div>

                            <div id="text">
                                <h5>Role</h5>
                                <p>Lead graphic designer on concept and
                                    design development</p>
                            </div>

                            <div id="text">
                                <h5>Studio</h5>
                                <p>N/A self-directed</p>
                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>

    </div>



@endsection