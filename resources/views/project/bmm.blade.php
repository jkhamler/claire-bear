@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12">

            <div style="padding-top: 25px;"><h4 class="project-title">The British Motor Museum - Exhibition Design</h4></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/bmm/BMM_1_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/bmm/BMM_2_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/bmm/BMM_3_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/bmm/BMM_4_1x.jpg" class="scale-img"/>
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



    <div id="overlay" onclick="off()">

        <div class="container-fluid">
            <div class="row" style="padding-top: 100px;">

                <div class="col-xs-1 col-sm-2 col-md-2 col-lg-3">

                </div>


                <div class="col-xs-10 col-sm-8 col-md-8 col-lg-6">

                    <div class="row align-items-center">


                        <div class="col">

                            <div id="text"><h3>The British Motor Museum</h3></div>
                            <div id="text"><h5>Exhibition Design</h5></div>

                            <div style="padding-top: 20px;">
                                <div id="text">The £1.1 million refurbishment was inspired by road graphics and vintage car adverts. These were developed to create a contemporary and bold setting of the reorganised space.
                                </div>
                            </div>

                            <br/>

                            <div id="text">
                                <h5>Deliverables</h5>
                                <p>- Visual identity and assets</p>
                                <p>- Interpretation design</p>
                                <p>- Museum layout</p>
                                <p>- Colours in the exhibition space</p>
                                <p>- Wayfinding</p>
                                <p>- Digital interpretation</p>
                            </div>

                            <div id="text">
                                <h5>Role</h5>
                                <p>- One of two lead graphic designers working on every design stage.</p>
                            </div>

                            <div id="text">
                                <h5>Studio</h5>
                                <p>- Easy Tiger Creative</p>
                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>

    </div>



@endsection