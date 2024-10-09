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
  
  <form method="POST" action="{{ route('updateuser', $user->id) }}">
    @csrf   
    @method('PUT')
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" value="{{$user->name}}" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>