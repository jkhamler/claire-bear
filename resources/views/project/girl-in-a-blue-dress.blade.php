@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12">

            <div style="padding-top: 25px;"><h4 class="project-title">Girl in a Blue Dress - Book Cover Design</h4></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/girl_blue_dress/Girl_Blue_Dress_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/girl_blue_dress/Girl_Blue_Dress_2_1x.jpg" class="scale-img"/>
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

                            <div id="text"><h3>Girl in a Blue Dress</h3></div>
                            <div id="text"><h5>Book Cover Design</h5></div>

                            <div style="padding-top: 20px;">
                                <div id="text">Proposal for a redesign of the cover of the novel, ‘Girl in a Blue Dress’. The title is partially obscured by blue material representing the mysterious main character of the book.
                                </div>
                            </div>

                            <br/>

                            <div id="text">
                                <h5>Deliverables</h5>
                                <p>– Book cover design</p>
                                <p>– Photography</p>
                            </div>

                            <div id="text">
                                <h5>Role</h5>
                                <p>- Lead graphic designer</p>
                            </div>

                            <div id="text">
                                <h5>Studio</h5>
                                <p>- N/A self-directed</p>
                            </div>

                        </div>


                    </div>


                </div>

            </div>
        </div>

    </div>



@endsection