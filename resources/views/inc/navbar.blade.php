<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>LEAGUE SYSTEM</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('storage/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="/home"><img width="50" height="70" src="/storage/img/bg-img/jj.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a data-toggle="tooltip" data-placement="bottom" title="Click to Logout"  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                            </form>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#">MANAGE</a>
                                            <ul class="dropdown">
                                            <li><a href="/team">&nbsp;&nbsp;REGISTER TEAM</a></li>
                                            <li><a href="/score">&nbsp;&nbsp;COMPUTE SCORE</a></li>
                                            <li><a href="/view-score">&nbsp;&nbsp;VIEW SCORE</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="/view">VIEW</a></li>
                                    <li><a href="/search">SEARCH</a></li>
                                    <li><a href="/table">LEAGUE TABLE</a></li>
                                    <li><a href="#">FIXTURES</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="/week-1">Week 1</a></li>
                                                <li><a href="/week-2">Week 2</a></li>
                                                <li><a href="#">Week 3</a></li>
                                                <li><a href="#">Week 4</a></li>
                                                <li><a href="#">Week 5</a></li>
                                                <li><a href="#">Week 6</a></li>
                                                <li><a href="#">Week 7</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Week 8</a></li>
                                                <li><a href="#">Week 9</a></li>
                                                <li><a href="#">Week 10</a></li>
                                                <li><a href="#">Week 11</a></li>
                                                <li><a href="#">Week 12</a></li>
                                                <li><a href="#">Week 13</a></li>
                                                <li><a href="#">Week 14</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Week 15</a></li>
                                                <li><a href="#">Week 16</a></li>
                                                <li><a href="#">Week 17</a></li>
                                                <li><a href="#">Week 18</a></li>
                                                <li><a href="#">Week 19</a></li>
                                                <li><a href="#">Week 20</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                    <li><a href="#">Stadiums 22</a></li>
                                                    <li><a href="#">Time 4:00PM 7:00PM</a></li>
                                                    <li><a href="#">Refeeres 5</a></li>
                                                    <li><a href="#">Officials 25</a></li>
                                                    <li><a href="#">Teams 10</a></li>
                                                    <li><a href="#">Coaches 10</a></li>
                                                    <li><a href="#">Players 540</a></li>
                                                </ul>-->
                                        </div>
                                    </li>
                                    <li><a href="#">VIEW FIXTURES</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                            <li><a href="/view-week-1/1">Week 1</a></li>
                                                <li><a href="/view-week-2/2">Week 2</a></li>
                                                <li class="disabled"><a href="#">Week 3</a></li>
                                                <li><a href="#">Week 4</a></li>
                                                <li><a href="#">Week 5</a></li>
                                                <li><a href="#">Week 6</a></li>
                                                <li><a href="#">Week 7</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Week 8</a></li>
                                                <li><a href="#">Week 9</a></li>
                                                <li><a href="#">Week 10</a></li>
                                                <li><a href="#">Week 11</a></li>
                                                <li><a href="#">Week 12</a></li>
                                                <li><a href="#">Week 13</a></li>
                                                <li><a href="#">Week 14</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Week 15</a></li>
                                                <li><a href="#">Week 16</a></li>
                                                <li><a href="#">Week 17</a></li>
                                                <li><a href="#">Week 18</a></li>
                                                <li><a href="#">Week 19</a></li>
                                                <li><a href="#">Week 20</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                    <li><a href="#">Stadiums 22</a></li>
                                                    <li><a href="#">Time 4:00PM 7:00PM</a></li>
                                                    <li><a href="#">Refeeres 5</a></li>
                                                    <li><a href="#">Officials 25</a></li>
                                                    <li><a href="#">Teams 10</a></li>
                                                    <li><a href="#">Coaches 10</a></li>
                                                    <li><a href="#">Players 540</a></li>
                                                </ul>
                                        </div>
                                    </li>
                                    
                                   
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a data-toggle="tooltip" data-placement="bottom" title="Logged In" href="/home">                        <!-- <img src="/storage/img/core-img/call2.png" alt=""> -->
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
