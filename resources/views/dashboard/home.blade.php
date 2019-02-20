@extends('layouts.dashboard')

@section('title', 'Home')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4" id="server-date-card"></div>

            <div class="col-xl-3 col-md-6 mb-4" id="client-time-card"></div>

            <div class="col-xl-3 col-md-6 mb-4" id="server-motd-card"></div>

            <div class="col-xl-3 col-md-6 mb-4" id="visitor-counter-card"></div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Getting Started</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                 aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <p>
                            This dashboard panel uses the
                            <a href="https://github.com/BlackrockDigital/startbootstrap-sb-admin-2">SB Admin 2</a>
                            template, with <a href="https://reactjs.org">React</a> powered cards (the ones above) as an
                            example. These cards connect to an example API defined in the <code>/routes/api.php</code>
                            file. The React components are stored in the <code>/resources/js/components</code>
                            directory and are compiled by <a href="https://laravel.com/docs/mix">Laravel Mix</a>. Feel
                            free to customize these cards and/or routes to your needs.
                        </p>

                        <p>
                            This is just temporary placeholder text; kind of like when a friend saves a spot for you in
                            line, only to be replaced by you when you arrive. You are currently reading text that is
                            written in English, not any other language. Web Designers use filler text so they can focus
                            on design. It will be replaced with real content before handover.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Technologies Used</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                 aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <p>
                            At some point someone will replace this block of text with useful words so visitors can learn more about your services/products offered by the website!
                        </p>

                        <ul>
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>MySQL</li>
                            <li>Docker</li>
                            <li>React</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
