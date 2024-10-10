<form action="{{route('storeblog')}}" method="POST">
@csrf
  <div class="form-group">
    <label for="title">title</label>
    <input type="text" required name= "title"class="form-control" placeholder="Enter text" id="text">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" required name="description" class="form-control" placeholder="Enter text" id="text"></textarea>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" required name="image" class="form-control" placeholder="Enter text" id="text">
  </div>
  <a >
  <button type="submit" class="btn btn-primary">Create a Blog</button>
  </a>
</form>