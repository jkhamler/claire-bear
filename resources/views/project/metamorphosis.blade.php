@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12 p-0" style="width: 100%;">

            <div style="padding-top: 25px;"><h4 class="project-title">The Metamorphosis, Franz Kafka - Book Design</h4></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/metamorphosis/Meta_1_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/metamorphosis/Meta_2_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/metamorphosis/Meta_3_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/metamorphosis/Meta_animation_1x.gif" class="scale-img"/>
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

                            <div id="text"><p class="overlay-heading">The Metamorphosis, Franz Kafka</p></div>
                            <div id="text"><p class="overlay-subheading">Book Design</p></div>

                            <div style="padding-top: 20px;">
                                <div id="text">A redesign of one of my favourite pieces of literature The Metamorphosis by Franz Kafka. I wanted to create a playful reading experience using typography. The text is curved to portray Gregor Samsa who is transformed into a beetle. As the book is read the gutter space between the pages move apart representing the distance between Gregor and his family when he is turned into a beetle.
                                </div>
                            </div>

                            <br/>

                            <div id="text">
                                <h5>Deliverables</h5>
                                <p>– Book design</p>
                                <p>– Book binding</p>
                            </div>

                            <div id="text">
                                <h5>Role</h5>
                                <p>Lead graphic designer</p>
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