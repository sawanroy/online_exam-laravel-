        @extends('layout/form_layout')
        @section('pagecontent')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ADD SUBJECTS</h3>
              </div>

            <div class="col-lg-6"> 
            <div class="x_panel">                 
                <div class="x_title">
                    <h2>ENTER SUBJECT NAME AND LANGUAGE</h2>
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
                    <form  data-parsley-validate  method="POST" action="{{url('/ins_subject')}}">
                      {{ csrf_field() }}
                      <label for="fullname">SUBJECT NAME * :</label>
                      <input type="text" name="sname" class="form-control" name="fullname" required />


                          <label for="heard">choose subject language</label>
                          <select name="lang" class="form-control" required>
                            <option value="">Choose subjects</option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                          </select>


                          <br/>
                          <button  class="btn btn-primary" type="submit">ADD SUBJECT</button>

                    </form>
                    <!-- end form for validations -->

                  </div>
                </div>


              </div>
              </div>

</div>
       
@endsection