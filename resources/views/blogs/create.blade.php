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
    
<div class="container ">
@if ($errors->any())
@foreach ($errors->all() as $error)
{{ $error }}
@endforeach
@endif
<form action="{{route('storeblog')}}" method="POST">
@csrf
<div>
    <h1>Welcome to Jay Blogs</h1>
</div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" required name="title"class="form-control" placeholder="Enter text"  value="{{ old('title') }}" id="text">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" required name="description" class="form-control" placeholder="Enter text" id="text">
    {{ old('description') }}
    </textarea>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" required name="image" class="form-control"   value="{{ old('image') }}" placeholder="Enter text" id="text">
  </div>
  <a >
  <button type="submit" class="btn btn-primary">Create a Blog</button>
  </a>
</form>
</div>
</body>
</html>