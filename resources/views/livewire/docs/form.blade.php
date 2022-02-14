
<!DOCTYPE html>
<html>
<head>
    <title></title>
    @livewireStyles
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  
<div class="container">
  
   <div class="col-md-6">
      <div class="card" style="margin-top: 100px;">
      <div class="card-header">
        Laravel Livewire Form Example - codechief.org
      </div>
      <div class="card-body">
        @livewire('docs.create-new')
      </div>
    </div>
   </div>
      
</div>
  
</body>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
</html> 