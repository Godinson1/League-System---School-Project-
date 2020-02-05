@include('inc.navbar')
@include('inc.messages')

<section>

    
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h1>MATCH RESULT</h1></div>

                            {!! Form::open(['action' => 'ScoreController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="form-group">
                            {{Form::text('match_week', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH WEEK'])}}
                            </div>  
                            <div class="form-group">
                            {{Form::text('match_one', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH ONE SCORE'])}}
                            </div>    
                            <div class="form-group">
                            {{Form::text('match_two', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH TWO SCORE'])}}
                            </div> 
                            <div class="form-group">
                            {{Form::text('match_three', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH THREE SCORE'])}}
                            </div>  
                            <div class="form-group">
                            {{Form::text('match_four', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH FOUR SCORE'])}}
                             </div>
                             <div class="form-group">
                            {{Form::text('match_five', '', ['class'  => 'form-control', 'placeholder' => 'ENTER MATCH FIVE SCORE'])}}
                            </div>
                            <div class="form-group text-center">
                             {{Form::submit('Upload Score', ['class' => 'btn btn-success'])}}
                            </div>
                     {!! Form::close() !!}


                        </div>
                    </div>
                </div>
        </div>

</section>
@include('inc.footer')