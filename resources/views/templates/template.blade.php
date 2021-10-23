<!DOCTYPE html>
<html lang="en">
<head>
  <title>NomedoSite</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: rgb(241, 13, 13);
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover {
      background-color: rgba(247, 241, 241, 0.274);
    }
    </style>
    </head>
    <body>
    
    <ul>
      <li><a class="active" href="/">Inicio</a></li>
      <li><a class="active" href="/lista">Lista</a></li>

    </ul>


<div class ="conteiner">
    @yield('content')
</div>

</body>
</html>