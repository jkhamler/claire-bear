@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12 p-0" style="width: 100%;">

            <div style="padding-top: 25px;"><h4 class="project-title">Melrose and Morgan - Seasonal Retail Campaign</h4></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/melrose/Melrose_1_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/melrose/Melrose_2_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/melrose/Melrose_4_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/melrose/Melrose_5_1x.jpg" class="scale-img"/>
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

                            <div id="text"><p class="overlay-heading">Melrose and Morgan</p></div>
                            <div id="text"><p class="overlay-subheading">Seasonal Retail Campaign</p></div>

                            <div style="padding-top: 20px;">
                                <div id="text">The Melrose and Morgan branding features strong and bold typography. I produced a Christmas visual language that featured traditional Christmas phrases and carols. These could be used across different formats and mediums.
                                </div>
                            </div>

                            <br/>

                            <div id="text">
                                <h5>Deliverables</h5>
                                <p>Visual identity and assets</p>
                                <p>Packaging design</p>
                                <p>Merchandise</p>
                                <p>Marketing materials</p>
                            </div>

                            <div id="text">
                                <h5>Role</h5>
                                <p>Graphic designer working on concept and design
                                    development</p>
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