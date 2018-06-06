@extends('app')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid">

        <div class="col-12 p-0" style="width: 100%;">

            <div style="padding-top: 25px;"><h4 class="project-title">The Football Association (FA) - Packaging Design</h4></div>
            <div><p style="width: auto;"><a href="#" onclick="on()" class="read-more">Read more</a></p></div>

        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/fa/FA_1_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/fa/FA_2_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/fa/FA_3_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/fa/FA_4_1x.jpg" class="scale-img"/>
        </div>

        <div class="col-12" style="padding: 0px;">
            <img src="/images/projects/fa/FA_5_1x.jpg" class="scale-img"/>
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


                            <div id="text"><p class="overlay-heading">The Football Association (FA)</p></div>
                            <div id="text"><p class="overlay-subheading">Packaging Design</p></div>


                            <div style="padding-top: 20px;">
                                <div id="text">The aim was to reposition the England football merchandising offer. Moving it up market by selling to new mass market retailers such as John Lewis and Sainsbury’s as well as a luxury offer for new collaborations e.g. Aspinals of London.
                                </div>

                                <br/>

                                <div id="text">The heritage of English football was a strong theme and the new kit was inspired by the 1960s red tops. The concept was to bring out the heritage and to make the brand bold and sophisticated.
                                </div>
                            </div>

                            <br/>

                            <div id="text">
                                <h5>Deliverables</h5>
                                <p>– Visual identity and assets</p>
                                <p>– Packaging mock-ups</p>
                                <p>– POS examples</p>
                                <p>– Luxury packaging mock-ups</p>
                                <p>– Patterns for tissue paper</p>
                                <p>– Luxury materials specs</p>
                            </div>

                            <div id="text">
                                <h5>Role</h5>
                                <p>Lead graphic designer</p>
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