<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Calendar+ | 404 </title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.10/css/all.css'>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="background"></div>
<div class="top">
  <h1>404</h1>
  <h3>página no encontrada</h3>
</div>
<div class="container">
  <div class="ghost-copy">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
    <div class="four"></div>
  </div>
  <div class="ghost">
    <div class="face">
      <div class="eye"></div>
      <div class="eye-right"></div>
      <div class="mouth"></div>
    </div>
  </div>
  <div class="shadow"></div>
</div>
<div class="bottom">
  <p>Boo, ¡parece que un fantasma robó esta página!</p>
  	@guest
  	@else
  	<form class="search">
  	 	<input type="text" class="search-bar" placeholder="Buscar">
	    <button type="submit" class="search-btn">
	      <i class="fa fa-search"></i>
	    </button>
	</form>
  	@endguest
  <div class="buttons">
  	@guest
  		<a href="/login"><button class="btn">Iniciar sesión</button></a> 
	    <a href="/register"><button class="btn">Registrarse</button></a>
  	@else
	  	<a href="javascript:history.back()"><button class="btn">Regresar</button></a> 
	    <a href="/home"><button class="btn">Inicio</button></a>
  	@endguest
  </div>
</div>

<footer>
  <p>Calendar+</p>
</footer>
<!-- partial -->
  
</body>
</html>
