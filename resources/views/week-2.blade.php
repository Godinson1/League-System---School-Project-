@include('inc.navbar')
@include('inc.messages')
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
                            <h2 data-animation="fadeInUp" data-delay="300ms">FIX<span> MATCH</span></h2>            
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

    
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h1>WEEK TWO FIXTURES</h1></div>

                            {!! Form::open(['action' => 'FixtureController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                            {{Form::text('match_one', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH ONE'])}}
                            </div>    
                            <div class="form-group">
                            {{Form::text('match_two', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH TWO'])}}
                            </div> 
                            <div class="form-group">
                            {{Form::text('match_three', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH THREE'])}}
                            </div>  
                            <div class="form-group">
                            {{Form::text('match_four', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH FOUR'])}}
                             </div>
                             <div class="form-group">
                            {{Form::text('match_five', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH FIVE'])}}
                            </div>
                            <div class="form-group text-center">
                             {{Form::submit('Fix Matches', ['class' => 'btn btn-success'])}}
                            </div>
                     {!! Form::close() !!}


                        </div>
                    </div>
                </div>
        </div>

</section>

@include('inc.footer')