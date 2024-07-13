<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
    integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
    integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery-bundle.min.css" integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css" integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js" integrity="sha512-dSI4QnNeaXiNEjX2N8bkb16B7aMu/8SI5/rE6NIa3Hr/HnWUO+EAZpizN2JQJrXuvU7z0HTgpBVk/sfGd0oW+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.umd.min.js" integrity="sha512-6vFONv+JJD01XArGGqxABRY3Vsm8tKuemThmZYfha9inGIuqPU5OgZP1QizBf0Y3JGPnrofy3jokdebgYNNhEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/zoom/lg-zoom.min.js" integrity="sha512-BfC/MaayF9sOZyn1bs1R1P8dEugU7v0j5Qu2FeWVfF/rhKUKZBD9kgNqRNinefIp9zAE7g2KhlwwhMpl5V1jMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/thumbnail/lg-thumbnail.min.js" integrity="sha512-Jx+orEb1KJtJ6Ajfshhr7is0zqgUC7H9ylk76KMtB9Ea2WAf/Muyzpe9zvBAYQQQKdAbj+rNYEorsRQLsmRafA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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