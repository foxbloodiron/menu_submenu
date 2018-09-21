<!DOCTYPE html>
<html>
<head>
	<title>Menu > Sub Menu</title>
	<!-- <link rel="stylesheet" type="text/css" href="node_modules/jquery-ui-dist/jquery-ui.css"> -->
  <link rel="stylesheet" type="text/css" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
<style type="text/css">

html, body{
  height: 100%;
  width: 100%;
  padding: 0;
	margin: 0;
  font-family: sans-serif;
}
.container{
  width: 100%;
  height: 100%;

}
.sidebar a{
	text-decoration: none;
	color: #bfbfbf;
  display: block;
  padding: 10px;
}

.sidebar a:hover{
	color:white;
  transition: 0.2s;
  background: #4c4c4c;
}

.sidebar{
	background-color: #4c4c4c;
	margin-top: 50px;
	height: 100%;
	width: 200px;
  position: relative;
  font-family: "calibri";
}

.sidebar li {
  list-style: none;
  padding: 5px 10px;
}

.sidebar ul{
  margin: 0;
  padding: 5px 0 5px 0;
}

.sidebar ul > li{
  margin: 0;
  padding: 0;
  
}
.sidebar ul > li.active > ul {
  color: white;
}

.sidebar ul > li > ul {
  display: none;
}

.sidebar ul > li > ul > li a{
  padding: 10px 20px 10px 20px;
}
.sidebar ul > li > ul > li > ul > li a{
  padding: 10px 30px 10px 30px;
}
.sidebar ul > li.active a{
	color: white;
}

.sidebar ul > li.open > ul{
  display: block;
  background: #777777;
  transition: display .5s;
}
.sidebar ul > li.open{
  display: block;
}

.sidebar ul > li.sub-menu:before{
  font-family: "Font Awesome 5 Free";
  content: "\f078";
  font-weight: 900;
  float: right;
  line-height: 25px;
  padding-right: 15px;
}
.sidebar ul > li.sub-menu.open:before{
  font-family: "Font Awesome 5 Free";
  content: "\f077";
  font-weight: 900;
  float: right;
  line-height: 25px;
  padding-right: 15px;
}
header{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 0 10px;
  background: #262626;
  box-sizing: border-box;
}
header .logo{
  color: #fff;
  height: 50px;
  line-height: 50px;
  font-size: 24px;
  float: left;
  font-weight: bold;
}


</style>
</head>
<body>
<header>
  <div class="logo">
    LOGO
  </div>
</header>
<div class="container">
  <div class="sidebar">
    <ul>
      <li class="active"><a href="home.html">Menu item 1</a></li>
      <li><a href="home.html">Menu item 2</a></li>
      <li class="sub-menu">
        <a href="javascript:void(0);">Menu item with submenu</a>
        <ul>
          <li>
          	<a href="javascript:void(0);">Submenu item</a>
          </li>
          <li>
          	<a href="javascript:void(0);">Submenu item</a>
          </li>
          <li><a href="javascript:void(0);">menu item</a></li>
          <li><a href="javascript:void(0);">menu item</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:void(0);">Menu item with submenu 2</a>
        <ul>
          <li>
            <a href="javascript:void(0);">Submenu item</a>
            <ul>
              <li>
                <a href="javascript:void(0);">Submenu item</a>
              </li>
              <li>
                <a href="javascript:void(0);">Submenu item</a>
              </li>
              <li><a href="home.html">menu item</a></li>
              <li><a href="home.html">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);">Submenu item</a>
            <ul>
              <li>
                <a href="javascript:void(0);">Submenu item</a>
              </li>
              <li>
                <a href="javascript:void(0);">Submenu item</a>
              </li>
              <li><a href="home.html">menu item</a></li>
              <li><a href="home.html">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);">Submenu item</a>
          </li>
          <li><a href="home.html">menu item</a></li>
          <li><a href="home.html">menu item</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

  <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
	<!-- <script type="text/javascript" src="node_modules/jquery-ui-dist/jquery-ui.js"></script> -->

<script type="text/javascript">

$(document).ready(function(){

  $('.sidebar ul > li:has(ul)').addClass('sub-menu');
  

	$('.sidebar ul > li:has(ul) a').on('click', function(a){

      $(this).parent().siblings().removeClass('open');
      $(this).parent().toggleClass('open'); 
  });
});

</script>
</body>
</html>