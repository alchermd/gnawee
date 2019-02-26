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
                            Aside from that, you can refer to the documentation of each components (they are all open
                            sourced) to customize and extend them as you see fit. Click the module you are interested
                            to with at the sidebar on the left to see related links and resources to help you better
                            understand that component.
                        </p>

                        <p>
                            At any rate, the core of this project is still good-ol' <em>vanilla Laravel</em> and
                            ReactJS,
                            so the canonical documentation will be at <a href="https://laravel.com/docs/5.7">Laravel</a>
                            and <a href="https://reactjs.org/docs/">ReactJS</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Technologies Used</h6>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <p>
                            At a glance, Gnawee includes the following open-source technologies:
                        </p>

                        <ul>
                            <li>
                                <a href="https://php.net">PHP</a>
                            </li>
                            <li>
                                <a href="https://laravel.com">Laravel</a>
                            </li>
                            <li>
                                <a href="https://www.mysql.com/">MySQL</a>
                            </li>
                            <li>
                                <a href="https://www.docker.com/">Docker</a>
                            </li>
                            <li>
                                <a href="https://reactjs.org">ReactJS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
