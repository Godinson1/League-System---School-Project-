@include('inc.navbar')
<!DOCTYPE html>
<html>
 <head>
  <title>LEAGUE SYSTEM</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
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
                            <h2 data-animation="fadeInUp" data-delay="300ms"><span>SEARCH TEAM RECORD</span></h2>
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
                            <h2 data-animation="fadeInDown" data-delay="300ms"><span>SEARCH TEAM RECORD</span></h2>
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

<div class="container box">
        <h3 align="center">Teams Record</h3><br />
        <div class="panel panel-default">
         <div class="panel-heading">Search Team's Data</div>
         <div class="panel-body">
          <div class="form-group">
           <input type="text" name="search" id="search" class="form-control" placeholder="Search Team's Data" />
          </div>
          <div class="table-responsive">
           <h3 align="center">Total Teams : <span id="total_records"></span></h3>
           <table class="table table-striped table-dark table-bordered">
            <thead>
             <tr>
              <th>Name</th>
              <th>Year Founded</th>
              <th>Stadium</th>
              <th>Players</th>
              <th>Coach Name</th>
              <th>Website</th>
              <th>Edit</th>
              <th>Delete</th>
             </tr>
            </thead>
            <tbody>
     
            </tbody>
           </table>
          </div>
         </div>    
        </div>
       </div>
     
     
     
         @include('inc.footer')
     
      </body>
     </html>
     
     <script>
     $(document).ready(function(){
     
      fetch_customer_data();
     
      function fetch_customer_data(query = '')
      {
       $.ajax({
        url:"{{ route('search.action') }}",
        method:'GET',
        data:{query:query},
        dataType:'json',
        success:function(data)
        {
         $('tbody').html(data.table_data);
         $('#total_records').text(data.total_data);
        }
       })
      }
     
      $(document).on('keyup', '#search', function(){
       var query = $(this).val();
       fetch_customer_data(query);
      });
     });
     </script>
     
