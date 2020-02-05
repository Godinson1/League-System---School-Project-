@include('inc.navbar')
@include('inc.messages')

<section>

        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
        <div class="card-header"><h1>UPDATE TEAM POINTS</h1></div>
                <h4>{{$team->name}}</h4>
                {!! Form::open(['action' => ['PointController@update', $team->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                        {{Form::text('L', '', ['class'  => 'form-control', 'placeholder' => 'LOST MATCH'])}}
                        </div>  
                        <div class="form-group">
                        {{Form::text('W', '', ['class'  => 'form-control', 'placeholder' => 'WON MATCH'])}}
                         </div>
                         <div class="form-group">
                        {{Form::text('D', '', ['class'  => 'form-control', 'placeholder' => 'DRAW MATCH'])}}
                        </div>
                        <div class="form-group">
                        {{Form::text('G', '', ['class'  => 'form-control', 'placeholder' => 'GOALS'])}}
                         </div>    
                        <div class="form-group">
                         {{Form::text('PTS', '', ['class'  => 'form-control', 'placeholder' => 'POINT'])}}
                        </div>  
                         {{Form::hidden('_method', 'PUT')}} 
                        <div class="form-group text-center">
                         {{Form::submit('Submit', ['class' => 'btn btn-success', 'placeholder' => 'WEBSITE'])}}
                        </div>
                {!! Form::close() !!}	
    
    
    
                        </div>
                    </div>
                </div>
            </div>
    



</section>


@include('inc.footer')