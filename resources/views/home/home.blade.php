<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about/about1">about1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about/about2">about 2</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
  <p>The navbar-expand-xxl|xl|lg|md|sm class determines when the navbar should stack vertically (on xxlarge, extra large, large, medium or small screens).</p>
</div>

<div class="container-fluid mt-3">
  <h3>Routename có parameter</h3>
  <p>
    <li><a href="{{route('parameter',['id' => 1])}}">parameter </a></li>
    <li><a href="{{route('parameter',['id' => 2])}}">parameter 2</a></li>
    <li><a href="{{route('parameter',['id' => 3])}}">parameter 3</a></li>
    
    
    
  </p>
  
</div>

<div class="container-fluid mt-3">
  <h3>Routename trong laravel: route('name')</h3>
  <p>
    <li><a href="{{route('home')}}">bài viết số 1</a></li>
    <li><a href="{{route('home')}}">bài viết số 2</a></li>
    <li><a href="{{route('home')}}">bài viết số 3</a></li>
    <li><a href="{{route('home')}}">bài viết số 4</a></li>
    <li><a href="{{route('home')}}">bài viết số 5</a></li>
    
    
  </p>
  
</div>



<div class="container-fluid mt-3">
  <h3>Routename có parameter</h3>
  <p>
    <li><a href="{{route('name_parameter',['id' => 1 ,'paras' => 1 ])}}">route name parameter </a></li>
    <li><a href="{{route('name_parameter',['id' => 2 , 'paras' =>2])}}">route name parameter 2</a></li>
    <li><a href="{{route('name_parameter',['id' => 3 , 'paras' => 3])}}">route name parameter 3</a></li>
    
    
    
  </p>
  
</div>

</body>
</html>
