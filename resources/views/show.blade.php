<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container">
    <div class="row">
        <div class="col-lg-6">
        <h2>{{ $user->name }}</h2>
        <h2>{{ $user->email }}</h2>
        <div class="row">
        <div class="col-lg-6">
        <a href="{{ route('edituser',$user) }}"><button type="submit" class="btn btn-primary">Edit</button>
        </a>
        </div> 
        <div class="col-lg-6">
        
       <form action="{{route('deleteuser', $user)}}" method="POST">
        @csrf
        @method("delete")
       <button type="submit" class="btn btn-danger">delete</button>
       </form>
        
        </div>
        </div>
        <div class="card">
        
    </div>
        </div>
        
 

</div>

</body>
</html>