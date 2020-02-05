@include('inc.navbar')
@include('inc.messages')
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url(/storage/img/bg-img/6.jpg);"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInUp" data-delay="300ms"><span>EDIT TEAM PROFILE</span></h2>
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
                            <h2 data-animation="fadeInDown" data-delay="300ms"><span>EDIT TEAM PROFILE</span></h2>
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
        <div class="card-header"><h1>EDIT TEAM PROFILE</h1></div>
                {!! Form::open(['action' => ['TeamController@update', $team->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                        {{Form::text('name', $team->name, ['class'  => 'form-control', 'placeholder' => 'TEAM NAME'])}}
                        </div>    
                        <div class="form-group">
                        {{Form::text('year', $team->year, ['class'  => 'form-control', 'placeholder' => 'YEAR FOUNDED'])}}
                        </div>  
                        <div class="form-group">
                        {{Form::text('email', $team->email, ['class'  => 'form-control', 'placeholder' => 'EMAIL'])}}
                         </div>
                         <div class="form-group">
                        {{Form::text('home_city', $team->home_city, ['class'  => 'form-control', 'placeholder' => 'HOME CITY'])}}
                        </div>
                        <div class="form-group">
                        {{Form::text('stadium', $team->stadium, ['class'  => 'form-control', 'placeholder' => 'HOME VENUE (STADIUM)'])}}
                         </div>    
                        <div class="form-group">
                         {{Form::text('players', $team->players, ['class'  => 'form-control', 'placeholder' => 'NUMBER OF PLAYERS'])}}
                        </div>  
                         <div class="form-group">
                        {{Form::text('coach_name', $team->coach_name, ['class'  => 'form-control', 'placeholder' => 'COACH NAME'])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('captain_name', $team->captain_name, ['class'  => 'form-control', 'placeholder' => 'CAPTAIN NAME'])}}
                        </div>  
                        <div class="form-group">
                           {{Form::text('website', $team->website, ['class'  => 'form-control', 'placeholder' => 'WEBSITE'])}}
                        </div>
                         <div class="form-group">
                         {{Form::label('team_logo', 'TEAM LOGO')}}
                         {{Form::file('team_logo')}}
                         </div> 
                         {{Form::hidden('_method', 'PUT')}} 
                        <div class="form-group text-center">
                         {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                        </div>
                {!! Form::close() !!}	
    
    
    
                        </div>
                    </div>
                </div>
            </div>
    



</section>

@include('inc.footer')