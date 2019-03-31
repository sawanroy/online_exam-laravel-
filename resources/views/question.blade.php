<!DOCTYPE html>
<html lang="en">
<head>
<title>Online examination</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<style>
{
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */ 
header { 
    background-color: blue;
    padding: 3px;
    text-align: center;
    font-size: 35px;
    color: white; 
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: right;
    width: 30%;
    height: 550px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 550px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: blue;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
.scroll {
    height:300px;
    overflow:scroll;
}
.left{
  float: right;
}
.button {
    background-color: white; /* Green */
    border: 1%;
    color: black;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {border-radius: 100%;}
</style>
</head>
<body>

<header>Online Examination</header>

<section>

  <nav>
    <div class="left
    <div class="card border-primary mb-2" style="max-width: 15rem;">
      <img style="height: 135px; width: 100%; display: block;" src="images/NewCandidateImage.jpg" alt="Card image">
</div>
</div>
<div class="card border-primary mb-2" style="max-width: 20rem;">
<img style="height: 135px; width: 100%; display: block;" src="images/NewCandidateImage.jpg" alt="Card image">
</div>
<div>
  <ul>
    <li></li>
  </ul>
</div>
@foreach ($quest as $quest)

      @endforeach
<div class="panel panel-info" style="max-width: 30rem;">
  <div class="panel-heading">question</div>
  <div class="card-body">
    <h4 class="panel-title">Choose a Question</h4>
    <div class="scroll">

    <table>
      <tr>
        <?php if(isset($quest->id)){?>
      <?php for($i=1;$i<=$quest->id;$i++)
      {?>
              
            <td><button type="button" class="button button1">{{ $i}}</button></td> 
        <?php 
      }?>
      </tr>
      <?php }
          else {
            echo "NO question found";
          }
       ?>

      </table>
      </div>
  </div>
</div>
  </nav>
  <form method="post" action="{{url('/ins_ans')}}">
     {{ csrf_field() }}
  <article>
    <?php if(isset($quest->id)){?>
    <h5>Question No.{{$quest->id}}</h5>
    <div class="col-lg-7">
    <ol class="breadcrumb">
      
  <li class="breadcrumb-item active">{{$quest->quest}}</li>
  <input name="id" type="hidden" value="{{$quest->id}}">
       <input name="quest" type="hidden" value="{{$quest->quest}}">

       <input name="trueans" type="hidden" value="{{$quest->ans}}">
</ol>

      <ul class="list-group">
 <ol class="breadcrumb">
  <li class="breadcrumb-item active"><div class="custom-control custom-radio">
      <input type="radio" id="customRadio1" name="opt" value="1" class="custom-control-input">
      <label class="custom-control-label" for="customRadio1">{{$quest->opt1}}</label>
    </div></li>
</ol>
<ol class="breadcrumb">
  <li class="breadcrumb-item active"><div class="custom-control custom-radio">
      <input type="radio" id="customRadio2" name="opt" value="2" class="custom-control-input">
      <label class="custom-control-label" for="customRadio2">{{$quest->opt2}}</label>
    </div></li>
</ol>
<ol class="breadcrumb">
  <li class="breadcrumb-item active"><div class="custom-control custom-radio">
      <input type="radio" id="customRadio3" name="opt" value="3" class="custom-control-input">
      <label class="custom-control-label" for="customRadio3">{{$quest->opt3}}</label>
    </div></li>
</ol>
<ol class="breadcrumb">
  <li class="breadcrumb-item active"><div class="custom-control custom-radio">
      <input type="radio" id="customRadio4" name="opt" value="4" class="custom-control-input">
      <label class="custom-control-label" for="customRadio4">{{$quest->opt4}}</label>
    </div></li>
</ol>
</ul>
</div>
<div class="col-lg-9">
  <button type="button" class="btn btn-outline-primary">Mark for review & Next</button>
  <button type="reset" class="btn btn-outline-primary">Clear response</button>
  <button type="submit" class="btn btn-primary">Save & Next</button>
  </div>
  <?php }
      else{
        echo "No question found";
      }
    ?>
  </article>
  </form>
</section>

<footer>  
  <p>Footer</p>
</footer>

</body>
</html>