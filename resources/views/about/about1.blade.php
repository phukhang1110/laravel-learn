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
          <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/about/about1">about1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about/about2">about 2</a>
        </li>
      </ul>
  </div>
</nav>

<div class="container-fluid mt-3">
  <h1>about1</h1>

</div>

<div class="container-fluid mt-3">
  <h3>Routename có tham số truyền vào</h3>
  <p>
    <li><a href="/about/about1/1">bài viết số 1</a></li>
    <li><a href="/about/about1/2">bài viết số 2</a></li>
    <li><a href="/about/about1/3">bài viết số 3</a></li>
    
    
  </p>
  
</div>

</body>
</html>