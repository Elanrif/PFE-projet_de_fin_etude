<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
</head>
<body>

  

<div class="container mt-3">
    
  <button type="button" class="btn btn-primary" id="myBtn">Show Toast</button>

  <div class="toast mt-3 d-fex justify-content-center align-items-center p-4">
       <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    <div class="toast-header">
      Toast Header
    </div>
    <div class="toast-body">
      Some text inside the toast body
    </div>
        <button class="btn btn-outline-danger " type="submit">supprimer</button>
        

  </div>
</div>

<script>
$(document).ready(function(){
  $('#myBtn').click(function(){
    $('.toast').toast({delay: 200000});
    $('.toast').toast('show');
  });
});
</script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
