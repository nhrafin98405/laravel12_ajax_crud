<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<form action="{{route('district.update',$district->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" value="{{old('name',$district->name)}}" class="form-control" id="name" placeholder="Enter name" name="name">
  </div>


  <div class="mb-3">
    <label for="country" class="form-label">Country:</label>
    <input type="text" value="{{old('country',$district->country)}}" class="form-control" id="country" placeholder="Enter country" name="country">
  </div>

  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" value="{{old('email',$district->email)}}" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  
  


  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
