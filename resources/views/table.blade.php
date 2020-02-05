@include('inc.navbar')
@include('inc.messages')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/5.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInDown" data-delay="300ms"><span>LEAGUE</span> TABLE</h2>
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
                            <h2 data-animation="fadeInUp" data-delay="300ms">delta state<span> football league</span></h2>
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
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/2.jpeg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInDown" data-delay="300ms">league <span>table</span></h2>
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
        <h2 class="text-center">LEAGUE TABLE</h2>
       
        <table class="table table-striped table-dark">
            <tr>
                <th>ID</th>
                <th>TEAM</th>
                <th>L</th>
                <th>W</th>
                <th>D</th>
                <th>G</th>
                <th>PTS</th>
            </tr>
            <tbody>
          @if($tables->count() > 0)
          @foreach($tables as $table)
          <tr>
                <td>{{$table->id}}</td>
                <td>{{$table->name}}</td>
                <td>{{$table->L}}</td>
                <td>{{$table->W}}</td>
                <td>{{$table->D}}</td>
                <td>{{$table->G}}</td>
                <td>{{$table->PTS}}</td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
       
    </div>
</section>

@include('inc.footer')