@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12" style="padding: 0px;" style="padding-top: 15px;">

            <div style="padding-top: 25px;"><h4 class="project-title">NT Biddulph Grange Garden</h4></div>
            <div><p class="project-subtitle">Lorem ipsum dolor sit amet, no vix tantas suscipit delicata, mel quas
                    congue ne. Ex usu evertitur temporibus, postea nusquam ut cum.</p></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/cat.jpg" class="scale-img" style="padding-top: 15px;"/>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/cat.jpg" class="scale-img" style="padding-top: 15px; padding-bottom: 15px;"/>

        </div>


        <div class="row">


        </div>

        <div class="d-flex justify-content-between">
            <div></div>
            <div>
                <a href="#"><i class="fas fa-chevron-circle-up"></i></a>
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

                            <div id="text"><h3>Project title</h3></div>
                            <div id="text"><h5>Exhibition Design</h5></div>

                            <div style="padding-top: 20px;">
                                <div id="text">
                                    In a professional context it often happens that private or corporate clients corder
                                    a
                                    publication to be
                                    made and presented with the actual content still not being ready. Think of a news
                                    blog that's
                                    filled
                                    with content hourly on the day of going live. However, reviewers tend to be
                                    distracted by
                                    comprehensible
                                    content, say, a random text copied from a newspaper or the internet. The are likely
                                    to focus on
                                    the
                                    text, disregarding the layout and its elements. Besides, random text risks to be
                                    unintendedly
                                    humorous
                                    or offensive, an unacceptable risk in corporate environments. Lorem ipsum and its
                                    many variants
                                    have
                                    been employed since the early 1960ies, and quite likely since the sixteenth century.
                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>



@endsection