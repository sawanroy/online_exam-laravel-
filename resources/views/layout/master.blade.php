<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online examination </title>
 <link href="assets/css/style_login.css" rel="stylesheet" type="text/css">
 <link href="assets/css/bootstrap.css" rel="stylesheet">
 <script type="text/javascript">
 	$('message').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
 </script>  
 <script src="vendors/jquery/dist/jquery.min.js"></script>
 <style type="text/css" >
 .header { 
    background-color: black;
    padding: 3px;
    text-align: center;
    font-size: 35px;
    color: white;
}
 	.article {
    float: center;
    padding: 80px;
   /* only for demonstration, should be removed */
}
 </style>
</bodys>
 <style type="text/css">
 	.center {
    margin: auto;
    width: 35%;
    border: 1px solid black;
    padding: 10px;
}
 </style>  
 
    </head>
<body>
@yield('mainpart')
<script>
	if($.browser.msie && $.browser.version <7){
		alert("Please use IE 7.0 or above");
		$("a.login_button").attr("disabled","disabled");
		$("a.login_button").parent().parent().parent().parent().prepend("<tr><td colspan=2 style='text-align:center;color:red'> <h2> Please use IE 7.0 or above</h2></td></tr>");
	}
	$('a').mousedown(function(event){
		avoidKeyPressing(event);
	});
	function notMySystem(){
		alert(mockLabels.notMySystem);
	}
</script>

</html>