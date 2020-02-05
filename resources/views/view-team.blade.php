@include('inc.navbar')
@include('inc.messages')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/1.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInUp" data-delay="300ms"><span>VIEW TEAM RECORD</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/5.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInDown" data-delay="300ms"><span>VIEW TEAM RECORD</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>

      

       
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<section>

        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h1>TEAM RECORD</h1></div>
    
                             <img class="rounded-circle" width="100" height="100" src="/storage/profile_images/{{$team->team_logo}}"><br><br>
                             <h1>TEAM NAME : {{$team->name}}</h1><br><br>
                             <h1>YEAR FOUNDED : {{$team->year}}</h1><br><br>
                             <h1>HOME CITY : {{$team->home_city}}</h1><br><br>
                             <h1>HOME VENUE (STADIUM) : {{$team->stadium}}</h1><br><br>
                             <h1>EMAIL : {{$team->email}}</h1><br><br>
                             <h1>WEBSITE : {{$team->website}}</h1><br><br>
                             <h1>PLAYERS : {{$team->players}}</h1><br><br>
                             <h1>COACH NAME : {{$team->coach_name}}</h1><br><br>
                             <h1>CAPTAIN NAME : {{$team->captain_name}}</h1><br><br>
                        </div>
                    </div>
                </div>
            </div>

</section>
@include('inc.footer')
    