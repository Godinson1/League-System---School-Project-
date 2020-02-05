@include('inc.navbar')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/4.jpeg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInUp" data-delay="300ms">view<span> teams</span></h2>            
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
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/6.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInDown" data-delay="300ms"><span>delta state football</span> league</h2>
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
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/4.jpeg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInDown" data-delay="300ms">designed by: <span>GODSPOWER</span></h2>
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

        <div class="container-fluid">
                <h1>ALL  TEAMS - <span class="badge badge-warning">{{$teams->count()}}</span></h1>
                  @if($teams->count() > 0)
                  @foreach($teams as $team)
                      
                  <div class= "jumbotron">
                      <div class="row">
                          <div class="col-md-4 col-sm-4">
                          <img class="rounded-circle" style="width: 50%" src="/storage/profile_images/{{$team['team_logo']}}">
                          </div>
                           <div class="col-md-8 col-sm-8">
                                  <h3>TEAM NAME : {{$team['name']}}</h3>
                                  <h2>YEAR FOUNDED : {{$team['year']}}</h2>
                           </div>
                      </div>
                      
                  </div>
                  @endforeach
                      @else
                              <p>No post found</p>
                      @endif
            
              </div>
        

</section>

@include('inc.footer')