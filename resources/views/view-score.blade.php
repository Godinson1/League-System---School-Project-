@include('inc.navbar')


<section>
        <div class="container-fluid">
                <h1>UPLOADED SCORES - <span class="badge badge-warning">{{$scores->count()}}</span></h1>
                  @if($scores->count() > 0)
                  @foreach($scores as $score)
                      
                  <div class= "jumbotron">
                      <div class="row">
                           <div class="col-md-8 col-sm-12">
                                {{$score->match_week}}
                                <br>
                                <hr>
                                   {{$score->match_one}}<br><br>
                                   {{$score->match_two}}<br><br>
                                   {{$score->match_three}}<br><br>
                                   {{$score->match_four}}<br><br>
                                   {{$score->match_five}}<br><br>
                                   <br>
                                   <hr>
                                   &copy; The following are results of the {{$score->match_week}} matches.
                           </div>
                      </div>
                      
                  </div>
                  @endforeach
                      @else
                              <p>No post found</p>
                      @endif
            
              </div>
        
                          

                        </div>
                    </div>
                </div>
        </div>



</section>






@include('inc.footer')