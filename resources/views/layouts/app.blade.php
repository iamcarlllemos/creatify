<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    @vite(['resources/css/app.css', 'resources/css/code.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="backdrop"></div>
    <div class="content-wrapper">
        @include('components.sidebar')
        <div class="content">
            @include('components.navbar')
            @yield('content')
        </div>
    </div>
    <div class="preferences">
            <div class="actions" id="hide-preferences">
                <i class='bx bx-chevron-right bx-tada' ></i>
            </div>
            <div class="content">
                <div class="mt-3 p-4 pb-0">
                    <h5 class="text-uppercase">My Preferences</h5>
                    <small>Explore different styles based on your preferred preferences.</small>
                    <button class="btn-reset mt-3">
                        <i class='bx bx-refresh' ></i>
                        Reset to default
                    </button>
                    <hr>
                </div>
                <div class="scrollable p-4">
                    <div class="group p-4 mb-3">
                        <label class="group-title" for="theme">Color Theme</label>
                        <div class="row mt-4">
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="theme" id="light-theme" checked>
                                    <label class="form-check-label" for="light-theme">
                                        <img src="{{asset('images/theme/light-theme.png')}}" alt="" srcset="" class="active">
                                        <p>Light Theme</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="theme" id="dark-theme">
                                    <label class="form-check-label" for="dark-theme">
                                        <img src="{{asset('images/theme/dark-theme.png')}}" alt="" srcset="" class="active">
                                        <p>Dark Theme</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group p-4 mb-3">
                        <label class="group-title" for="theme">Sidebar Apperance</label>
                        <div class="row mt-4">
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="theme" id="sidebar-light-theme" checked>
                                    <label class="form-check-label" for="sidebar-light-theme">
                                        <img src="{{asset('images/theme/sidebar-light.png')}}" alt="" srcset="" class="active">
                                        <p>Light</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="theme" id="sidebar-dark-theme">
                                    <label class="form-check-label" for="sidebar-dark-theme">
                                        <img src="{{asset('images/theme/sidebar-dark.png')}}" alt="" srcset="">
                                        <p>Dark</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group p-4 mb-3">
                        <label class="group-title" for="theme">Navigation Type</label>
                        <div class="row mt-4">
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="theme" id="left-navigation" checked>
                                    <label class="form-check-label" for="left-navigation">
                                        <img src="{{asset('images/theme/left-navigation.png')}}" alt="" srcset="" class="active">
                                        <p>Light</p>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="theme" id="top-navigation">
                                    <label class="form-check-label" for="top-navigation">
                                        <img src="{{asset('images/theme/top-navigation.png')}}" alt="" srcset="">
                                        <p>Dark</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @livewireScripts
    @yield('scripts')
</body>
</html>