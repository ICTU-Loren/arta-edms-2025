<!DOCTYPE html>    
<html lang="en">    
<head>    
  <meta charset="utf-8">    
  <title>jQuery Change Event Example</title>    
  <style>    
  div {    
    color: red;    
  }    
  </style>    
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>    
<body>    
 <select id="select_id" name="actors" >    
  <option>Test</option>    
  <option selected="selected">Java</option>    
  <option>Python</option>    
  <option>Ruby</option>    
  <option>PHP</option>    
  <option>Jquery</option>    
</select>    
<div id="location"></div>    
 <script>    
$( "select" ).change(function () {    
document.getElementById("location").innerHTML="You selected: "+document.getElementById("select_id").value;  
});  
</script>    
 </body>    
</html>   