<html>

<head>
    <title>Claire Horne | Creative Graphic Designer</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roberto">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/extras.css">

    <link rel="icon"
          type="image/png"
          href="/images/ch-icon.png">

    <meta name="description"
          content="Claire is a London based Creative Graphic Designer with the experience of working on a wide range of projects. She has a BA (Hons) from Camberwell Collage of Arts, an MA from Central Saint Martins and has been awarded an MISTD in typography.">

</head>

<body class="main-background">

@section('navbar')
    @include('navbar')
@show

<div class="body-container">
    @yield('content')
</div>

@section('footer')
    @include('footer')
@show


<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

<script src="/js/extra.js"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-40864840-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-40864840-1');
</script>

</body>

</html>

