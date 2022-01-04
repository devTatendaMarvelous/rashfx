<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | Online Forex, Crypto Currency Mining Investment And Trading Platform. </title>
    <link rel="icon" href="/storage/images/favicon.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="/storage/images/favicon.png" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/dashboard/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('css/dashboard/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('css/dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dashboard/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dashboard/assets/css/structure.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dashboard/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('css/dashboard/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dashboard/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />  
   
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    
</head>
<body>
     <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <div id="app">
        <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top mb-3">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center ">
                 <li class="nav-item theme-logo">
                    <a href="/home" > <h3>{{ config('app.name') }} </h3></a>
                    
                   
                </li>
            </ul>
            

            <ul class="navbar-item flex-row ml-md-auto ">

                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Market
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex" href="/home"> <span class="align-self-center">&nbsp;Forex</span></a>
                        <a class="dropdown-item d-flex" href="/stock"> <span class="align-self-center">&nbsp;Stock</span></a>
                        <a class="dropdown-item d-flex" href="/crypto"><span class="align-self-center">&nbsp;Cryptocurrency</span></a>
                        <a class="dropdown-item d-flex" href="/indices"> <span class="align-self-center">&nbsp;Indices</span></a>
                        <a class="dropdown-item d-flex" href="/cfd"> <span class="align-self-center">&nbsp;Oil & Gas</span></a>
                    </div>
                </li>
                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bitcoin
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex  btn-danger" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalLong"> <span class="align-self-center">&nbsp;Sell Bitcoin</span></a>
                        <a class="dropdown-item d-flex btn-success" href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="align-self-center">&nbsp;Buy Bitcoin</span></a>
                        {{-- <a class="dropdown-item d-flex btn-secondary" href="/metatrade"> <span class="align-self-center">&nbsp;MetaTrader</span></a> --}}
                        <a class="dropdown-item d-flex btn-secondary" href="/metatrade"> <span class="align-self-center">&nbsp;MetaTrader</span></a>
                        <a class="dropdown-item d-flex btn-success" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter"> <span class="align-self-center">&nbsp;Deposit Fund</span></a>
                        <a class="dropdown-item d-flex " href="javascript:void(0);"> <span class="align-self-center"></span></a>
                    </div>
                </li>
                
                 <li class="nav-item dropdown language-dropdown mr-5">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                        <a class="dropdown-item d-flex  btn-danger" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" > <span class="align-self-center">&nbsp;logout</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                        </form> 
                        {{-- <a class="dropdown-item d-flex btn-success" href="javascript:void(0);" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="align-self-center">&nbsp;Buy Bitcoin</span></a>
                        <a class="dropdown-item d-flex btn-secondary" href="/metatrade"> <span class="align-self-center">&nbsp;MetaTrader</span></a>
                        <a class="dropdown-item d-flex btn-secondary" href="/metatrade"> <span class="align-self-center">&nbsp;MetaTrader</span></a>
                        <a class="dropdown-item d-flex btn-success" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter"> <span class="align-self-center">&nbsp;Deposit Fund</span></a>
                        <a class="dropdown-item d-flex " href="javascript:void(0);"> <span class="align-self-center"></span></a> --}}
                    </div>
                </li>
               
 
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->
    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container mt-5 ">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>{{ Auth::user()->name }}</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            
        </header>
    </div>
    <!--  END NAVBAR  -->
    <div class="main-container" id="container">
<!--  BEGIN SIDEBAR  -->
<div class="overlay"></div>
        <div class="search-overlay"></div>
        <div class="sidebar-wrapper sidebar-theme mt-5">
            
            <nav id="sidebar">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="/home"  aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            
                        </a>
                        
                    </li>

                     <li class="menu">
                        <a href="#students" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>My Account</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="students" data-parent="#accordionExample">
                            <li>
                                <a href="/profiles"> Profile</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Security </a>
                            </li>
                        </ul>
                    </li>
                     <li class="menu">
                        <a href="#lecturers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Transactions</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="lecturers" data-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);"> History </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#departments" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                <span>Market Place</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="departments" data-parent="#accordionExample">
                            <li>
                                <a href="/home">Forex </a>
                            </li>
                            <li>
                                <a href="/stock">Stock </a>
                            </li>
                            <li>
                                <a href="/crypto">Cryptocurrency</a>
                            </li>
                            <li>
                                <a href="/indices">Indices </a>
                            </li>
                            <li>
                                <a href="/cfd">Oil & Gas </a>
                            </li>
                            
                        </ul>
                    </li>
                     
                    <li class="menu">
                        <a href="#levels" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                <span>Deposit</span>
                            </div>
    
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="levels" data-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);">New Request </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> History </a>
                            </li>
                            
                            
                        </ul>
                    </li>
                        <script type="text/javascript">
                            baseUrl = "https://widgets.cryptocompare.com/";
                            var scripts = document.getElementsByTagName("script");
                            var embedder = scripts[ scripts.length - 1 ];
                            (function (){
                            var appName = encodeURIComponent(window.location.hostname);
                            if(appName==""){appName="local";}
                            var s = document.createElement("script");
                            s.type = "text/javascript";
                            s.async = true;
                            var theUrl = baseUrl+'serve/v1/coin/tiles?fsym=BTC&tsyms=USD,EUR,CNY,GBP';
                            s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                            embedder.parentNode.appendChild(s);
                            })();
                        </script>

                     <li class="menu">
                        <a href="#courses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>Withdrawal</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="courses" data-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);">New Request </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> History </a>
                            </li>
                            
                            
                        </ul>
                    </li>

                                    

                    
                </ul>
                
                 
                
            </nav>

        </div>
       
        <!--  END SIDEBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    
        <div id="content" class="main-content">
        <main class="container mt-5 ">
            @yield('content')
        
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | {{config('app.name')}}</a>
                    </p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">rashfx@gmail.com</p>
                </div>
            </div>
            </main>
        </div>
    </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   
    <script src="{{asset('css/dashboard/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('css/dashboard/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('css/dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('css/dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('css/dashboard/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="/css/dashboard/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL /css/dashboard/PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('css/dashboard/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('css/dashboard/assets/js/dashboard/dash_1.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo3/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Aug 2021 13:10:10 GMT -->
</html>