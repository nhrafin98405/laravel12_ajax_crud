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

<div class="p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap 5 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-3 ">
    <div class="d-flex justify-content-between align-items-center">
        <h2>District Table</h2>

  <a href="{{route('district.create')}}" class="btn btn-success" >
    
    Create District

  </a>
    </div>
  
             
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>District Name</th>
        <th>Country Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($district as $districts )
            
        
      <tr>
        <td>{{$districts->id}}</td>
        <td>{{$districts->name}}</td>
        <td>{{$districts->country}}</td>
        <td>{{$districts->email}}</td>
        <td>
            <form action="{{route('district.destroy',$districts->id )}}" method="POST">
                <a href="{{route('district.edit',$districts->id)}}" class="btn btn-warning">Edit</a>
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delet</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>