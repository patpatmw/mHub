<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blogs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Blogs Table {{$allblogs->count()}}</h2>
  <a href="{{route('createblog')}}">
        <button type="button" class="btn btn-primary">Create</button>
        </a>
    </tr>
     
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
 
 
      @foreach($allblogs as $blog)
      <tr>
        <td>{{$blog->title}}</td>
        <td>{{$blog->description}}</td>
        <td>{{$blog->image}}</td>
        <td><a href="{{ route('showblog',$blog) }}">
        <button type="button" class="btn btn-secondary">Show</button>
        </a>
        <a href="{{ route('editblog',$blog) }}">
        <button type="button" class="btn btn-primary">Edit</button>
        </a>
        
        
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
