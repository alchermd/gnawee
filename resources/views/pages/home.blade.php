<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gnawee - Laravel Starter Project">
    <meta name="author" content="John Alcher Doloiras">

    <title>Gnawee - Laravel Starter Project</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('css/device-mockups/device-mockups.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/new-age.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Gnawee</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" id="scrollspyItems">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#download">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>

            <div class="dropdown-divider"></div>

            <ul class="navbar-nav ml-lg-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="header-content mx-auto">
                    <h1 class="mb-5">
                        <span class="display-2">Gnawee</span>
                        <br> Landing Page + <br>
                        Admin Panel for your next Laravel project.
                    </h1>
                    <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Start Now for Free!</a>
                </div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="device-container">
                    <div class="device-mockup ipad_pro portrait white">
                        <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="{{ asset('img/demo-screen-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="download bg-primary text-center" id="download">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="section-heading mb-3">Get started working on your idea in <u>minutes</u></h2>

                <ul class="fa-ul text-left lead mb-4">
                    <li class="mb-4">
                        <span class="fa-li"><i class="fas fa-arrow-right text-success"></i></span> Follow the <a
                                href="https://github.com/alchermd/gnawee" class="text-primary" target="_blank">Github
                            repository <i class="fas fa-external-link-alt"></i></a> instructions. (Recommended)
                    </li>

                    <li>
                        <span class="fa-li"><i class="fas fa-arrow-right text-success"></i></span> Clone the repository
                        directly below to get started:
                    </li>
                </ul>

                <kbd class="p-3 mb-6">https://github.com/alchermd/gnawee.git</kbd>

                <ul class="fa-ul text-left lead mt-5">
                    <li class="mb-4">
                        <span class="fa-li"><i class="fas fa-lock text-success"></i></span>
                        Want to snoop around? Try the
                        <a class="text-primary" href="{{ route('register') }}">registration</a> or
                        <a class="text-primary" href="{{ route('login') }}">login page</a>.
                    </li>

                    <li class="mb-4">
                        <span class="fa-li"><i class="fas fa-check-circle text-success"></i></span> Or, take an overview
                        of the features on the <a class="text-primary js-scroll-trigger" href="#features">next
                            section.</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="features" id="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Just enough to get you started.</h2>
            <p class="text-muted">
                We sweat out the basics without getting on your way.
            </p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 my-auto">
                <div class="device-container">
                    <div class="device-mockup ipad_pro portrait white">
                        <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                <img src="{{ asset('img/demo-screen-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-lock text-primary"></i>
                                <h3>Authentication</h3>
                                <p class="text-muted">
                                    Laravel's <a href="http://laravel.com/docs/authentication">default
                                        authentication</a> hooked up with an admin panel.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-envelope-letter text-primary"></i>
                                <h3>Email</h3>
                                <p class="text-muted">Email verification and password resets out of the box.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-layers text-primary"></i>
                                <h3>Easy Setup</h3>
                                <p class="text-muted">
                                    Start with <code>php artisan serve</code> or use Vessel to easily run Docker.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-item">
                                <i class="icon-wallet text-primary"></i>
                                <h3>Open Source</h3>
                                <p class="text-muted">
                                    Free to use with optional premium support
                                    <a href="https://johnalcher.me/contact?message=So%20about%20premium%20support%20for%20Gnawee">
                                        available.
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta-content">
        <div class="container">
            <h2>Start working<br> on your idea.</h2>
            <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section class="contact bg-primary" id="contact">
    <div class="container">
        <h2>I'd love to hear from you!</h2>

        <ul class="list-inline list-social">
            <li class="list-inline-item social-github">
                <a href="https://github.com/alchermd">
                    <i class="fab fa-github"></i>
                </a>
            </li>
            <li class="list-inline-item social-twitter">
                <a href="https://twitter.com/alchermd">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item social-johnalcher">
                <a href="https://johnalcher.me">
                    <i class="fa fa-home"></i>
                </a>
            </li>
        </ul>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; John Alcher Doloiras 2019. All Rights Reserved.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
                <a href="#">Terms</a>
            </li>
            <li class="list-inline-item">
                <a href="#">FAQ</a>
            </li>
        </ul>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('js/new-age.js') }}"></script>

</body>

</html>
