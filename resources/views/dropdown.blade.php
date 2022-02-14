<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 8 Dynamic Dependent Dropdown using Jquery Ajax - XpertPhp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Laravel 8 Dynamic Dependent Dropdown using Jquery Ajax</h2>
    <div class="form-group">
      <label for="department">department:</label>
	  <select id="department" name="category_id" class="form-control">
        <option value="" selected disabled>Select department</option>
         @foreach($department as $key => $department)
         <option value="{{$key}}"> {{$department}}</option>
         @endforeach
         </select>
    </div>
    <div class="form-group">
      <label for="office">office:</label>
      <select name="office" id="office" class="form-control"></select>
    </div>
	<div class="form-group">
      <label for="div_unit">div_unit:</label>
      <select name="div_unit" id="div_unit" class="form-control"></select>
    </div>
</div>
<script type=text/javascript>
  $('#department').change(function(){
  var departmentID = $(this).val();  
  if(departmentID){
    $.ajax({
      type:"GET",
      url:"{{url('getOffice')}}?department_id="+departmentID,
      success:function(res){        
      if(res){
        $("#office").empty();
        $("#office").append('<option>Select office</option>');
        $.each(res,function(key,value){
          $("#office").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#office").empty();
      }
      }
    });
  }else{
    $("#office").empty();
    $("#div_unit").empty();
  }   
  });
  $('#office').on('change',function(){
  var officeID = $(this).val();  
  if(officeID){
    $.ajax({
      type:"GET",
      url:"{{url('getDiv_unit')}}?office_id="+officeID,
      success:function(res){        
      if(res){
        $("#div_unit").empty();
		$("#div_unit").append('<option>Select div_unit</option>');
        $.each(res,function(key,value){
          $("#div_unit").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#div_unit").empty();
      }
      }
    });
  }else{
    $("#div_unit").empty();
  }
    
  });
</script>
</body>
</html>