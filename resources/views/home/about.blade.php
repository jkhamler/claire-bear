<!-- Stored in resources/views/child.blade.php -->

@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row" style="padding-top: 25px;">

            <div class="col-6">

                <p class="about-subheading">About</p>

            </div>

            <div class="col-6">

                <p>I'm a multi-disciplinary graphic designer who thrives on concepts and beautiful design.
                    I believe that simple and intelligent ideas are the foundation to creating thought
                    provoking, successful design.</p>

                <p>With experience of working in a design studio and as a client facing designer I am able to
                    develop branding and concepts that are realistic and achievable.</p>

                <p>I have a passion for concepts, typography, layout and identities. I am able to work across
                    all design stages; pitching, concepts, design development, production and artworking.
                    I enjoy creating graphics that can work across multiple platforms. </p>

            </div>

        </div>

        <hr/>

        <div class="row">

            <div class="col-6">

                <p class="about-subheading">Skills</p>

            </div>

            <div class="col-6">

                <p>&#8211; Concept generation</p>
                <p>&#8211; Research and moodboard</p>
                <p>&#8211; Concept generation</p>
                <p>&#8211; Design development</p>
                <p>&#8211; Producing brand guidelines</p>
                <p>&#8211; Artworking</p>
                <p>&#8211; Print and digital</p>
                <p>&#8211; Layout design</p>
                <p>&#8211; Identity design</p>
                <p>&#8211; Presentation design</p>
                <p>&#8211; Collaboration</p>

            </div>

        </div>

        <hr/>

        <div class="row">

            <div class="col-6">

                <p class="about-subheading">Clients</p>

            </div>

            <div class="col-6">

                <div class="row" style="padding-left: 20px;">

                    @foreach($clients as $client)
                        <div style="width: 110px; margin: 3px; background-color: white;">
                            <img class="card-img-top" src="{{ $client['thumbnail_path'] }}" alt="{{ $client['name'] }}">
                        </div>
                    @endforeach

                </div>

            </div>

        </div>

        <hr/>

        <div class="row">

            <div class="col-6">

                <p class="about-subheading">Contact</p>

            </div>

            <div class="col-6">

                <p>I'm always interested to hear about exciting opportunities and projects so please don't hesitate to
                    contact me.</p>

                <p>Phone: +44 (0) 793 048 3336</p>

                <p>Email: <a href="mailto:hello@clairehorne.co.uk?Subject=Hello" style="color: #333333;"
                             target="_top">hello@clairehorne.co.uk</a>
                </p>

            </div>
        </div>

    </div>

{{--New Accordian Section (jQuery)--}}
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="col-12 border-bottom">
                <h3>Privacy</h3>
            </div>
        </div>


        <div class="row">
            <div class="col-2">

            </div>

            <div class="col-8 border-left">

                <br/>

                <div class="wrapper center-block">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading active" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </a>
                                    <a style="float: right;">
                                        <i id = "chevronOne" class="indicator fas fa-chevron-down" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseOne">
                                        </i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </a>
                                    <a style="float: right;">
                                        <i id = "chevronTwo" class="indicator fas fa-chevron-down" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseTwo">
                                        </i>
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>

                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </a>
                                    <a style="float: right;">
                                        <i id = "chevronThree" class="indicator fas fa-chevron-down" data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapseThree">
                                        </i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                                    ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br/>


            </div>


            <div class="col-2 border-left">

            </div>

        </div>


        <div class="row-fluid">
            <div class="col-12 border-top">
            </div>
        </div>


        <br/>


    </div>


@endsection