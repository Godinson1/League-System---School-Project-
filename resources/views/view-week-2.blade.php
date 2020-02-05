@include('inc.navbar')

<section>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h1>WEEK TWO FIXTURES</h1></div>

                               <small>Wednesday September 6, 2019</small>
                               <h5> {{$fixtures['match_one']}} <h5>
                               <small>Time : 6:00PM GMT</small><small> Stadium : Maracana</small>
                                <hr>
                                <small>Wednesday September 6, 2019</small>
                                <h5> {{$fixtures['match_two']}} <h5>
                                <small>Time : 8:00PM GMT</small><small> Stadium : San Siro</small>
                                <hr>
                                <small>Thursday September 7, 2019</small>
                                <h5> {{$fixtures['match_three']}} <h5>
                               <small>Time : 5:00PM GMT</small><small> Stadium : Old trafford</small>
                                <hr>
                                <small>Thursday September 7, 2019</small>
                                <h5> {{$fixtures['match_four']}} <h5>
                                <small>Time : 8:00PM GMT</small><small> Stadium : Stamford Bridg</small>
                                <hr>
                                <small>Friday September 8, 2019</small>
                               <h5> {{$fixtures['match_five']}} <h5>
                               <small>Time : 6:00PM GMT</small><small> Stadium : Camp nou</small>
                                <hr>
                                <p>&copy;All Mactches are of the Delta Football League</p>

                        </div>
                    </div>
                </div>
        </div>



</section>








@include('inc.footer')