        @extends('layout/form_layout')
        @section('pagecontent')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ENTER TEST NAME AND TIME DURATION</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">go</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6"> 
            <div class="x_panel">                 
                <div class="x_title">
                    <h2>Test details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate method="post" action="{{url('/insert_testname')}}">
                      {{ csrf_field() }}
                      <label for="fullname">Test name</label>
                      <input type="text" name="tname" class="form-control" name="fullname" required />

                       <label for="fullname">Total marks</label>
                      <input type="text" name="tmarks" class="form-control" name="fullname" required />

                       <label for="fullname">Total question</label>
                      <input type="text" name="tquest" class="form-control" name="fullname" required />

                       <label for="fullname">Negative Marks</label>
                      <input type="text" name="nmarks" class="form-control" name="fullname" required />

                       <label for="fullname">Positive Marks</label>
                      <input type="text" name="pmarks" class="form-control" name="fullname" required />


                          <label for="heard">Time duration</label>
                          <input type="time" name="time" class="form-control" value="00:00:00">
        
                          <br/>
                          <button class="btn btn-primary">Submit</button>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>


              </div>
              </div>

</div>

<script>
function myFunction() {
    var x = document.getElementById("myTime");
    var defaultVal = x.defaultValue;
    var currentVal = x.value;
    
    if (defaultVal == currentVal) {
        document.getElementById("demo").innerHTML = "Default value and current value is the same: "
        + x.defaultValue + " and " + x.value
        + "<br>Change the value of the time field to see the difference!";
    } else {
        document.getElementById("demo").innerHTML = "The default value was: " + defaultVal
        + "<br>The new, current value is: " + currentVal;
    }
}
</script>
       
@endsection