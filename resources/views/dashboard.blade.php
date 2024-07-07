@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4 px-4">
        <div class="row">
            <div class="col-12 col-md-12 col-xl-8">
                <div class="banner p-4 border shadow">
                    <div class="page-title">
                        <h5>Dashboard</h5>
                    </div>
                    <nav class="mt-3 mb-3" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <hr class="my-4">
                    <div class="greetings">
                        <h4>Hello, Good Evening!</h4>
                        <h2>Mr. Carl Llemos</h2>
                    </div>
                </div>
                <div class="overlay-cards">
                    <div class="row">
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h6 class="card-label line-clamp">Total Visitors</h6>
                                    <h2 class="ms-1">
                                        0 
                                    </h2>
                                </div>
                                <div class="card-footer bg-transparent border-0 d-flex justify-content-end pb-3">
                                    <a href="" class="nav-link open-card-link">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h6 class="card-label line-clamp">Total Pages</h6>
                                    <h2 class="ms-1">10</h2>
                                </div>
                                <div class="card-footer bg-transparent border-0 d-flex justify-content-end pb-3">
                                    <a href="" class="nav-link open-card-link">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h6 class="card-label line-clamp">Total Basic User</h6>
                                    <h2 class="ms-1">5</h2>
                                </div>
                                <div class="card-footer bg-transparent border-0 d-flex justify-content-end pb-3">
                                    <a href="" class="nav-link open-card-link">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h6 class="card-label line-clamp">Total Super User</h6>
                                    <h2 class="ms-1">3</h2>
                                </div>
                                <div class="card-footer bg-transparent border-0 d-flex justify-content-end pb-3">
                                    <a href="" class="nav-link open-card-link">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h6 class="card-label line-clamp">Total Testimonials</h6>
                                    <h2 class="ms-1">20+</h2>
                                </div>
                                <div class="card-footer bg-transparent border-0 d-flex justify-content-end pb-3">
                                    <a href="" class="nav-link open-card-link">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h6 class="card-label line-clamp">Total Projects</h6>
                                    <h2 class="ms-1">10+</h2>
                                </div>
                                <div class="card-footer bg-transparent border-0 d-flex justify-content-end pb-3">
                                    <a href="" class="nav-link open-card-link">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-label">
                    <p>Site Visitors</p>
                </div>
                <div class="visitor-logs mt-4">
                    <table class="table w-100">
                        <thead>
                            <tr>
                                <th>IP</th>
                                <th>Country</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>192.182.234</td>
                                <td>Philippines</td>
                                <td>July 1, 2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="widgets p-4 mb-3">
                    <div id="widget-activty-logs" class="widget-group">
                        <div class="group-name">
                            <h6>Activity Logs</h6>
                            <a href="#" class="nav-link">View</a>
                        </div>
                        <hr>
                        <div class="scrollable">
                            <a href="" class="d-flex align-items-center gap-3 nav-link cursor-pointer my-3">
                                <div class="icon">
                                    <i class='bx bx-log-in-circle' ></i>
                                </div>
                                <div class="message">
                                    <p class="mb-0">
                                        User carl01 logged in at Mozilla Firefox | 192.168.1.1
                                    </p>
                                </div>
                            </a>
                            <a href="" class="d-flex align-items-center gap-3 nav-link cursor-pointer my-3">
                                <div class="icon">
                                    <i class='bx bx-check'></i>
                                </div>
                                <div class="message">
                                    <p class="mb-0">
                                        User `Kemuel Mariano` was added.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widgets p-4 mb-3">
                    <div id="widget-notes" class="widget-group">
                        <div class="group-name">
                            <h6>Notes</h6>
                        </div>
                        <hr>
                        <div class="scrollable">
                            <a href="" class="d-flex align-items-center gap-3 nav-link cursor-pointer my-3">
                                <div class="icon">
                                    <i class='bx bx-note'></i>
                                </div>
                                <div class="message">
                                    <p class="mb-0">
                                        Diasi Lorem ipsum, dolor sit amet consectet
                                    </p>
                                </div>
                            </a>
                            <a href="" class="d-flex align-items-center gap-3 nav-link cursor-pointer my-3">
                                <div class="icon">
                                    <i class='bx bx-note'></i>
                                </div>
                                <div class="message">
                                    <p class="mb-0">
                                        Lorem ipsum, dolor sit amet consectet
                                    </p>
                                </div>
                            </a>
                            <button class="btn-add-notes"><i class='bx bx-edit-alt'></i> Write</button>
                        </div>
                    </div>
                </div>
                <div class="widgets p-4 mb-3">
                    <div id="widget-time-series" class="widget-group">
                        <h5>Philippines</h5>
                        <h6>Taytay, Rizal</h6>
                        <hr>
                        <h5>22 &deg;C</h5>
                        <h6>Feels Like: 24 &deg;C</h6>
                        <h6>Forecast: 34 / 22 &deg;C</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection