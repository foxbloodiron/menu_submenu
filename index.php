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
  background: #3F3F3F;
}

.sidebar{
	background-color: #4c4c4c;
	margin-top: 50px;
	height: 100%;
	width: 200px;
  float: left;
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
  color: #bfbfbf !important;
}

.sidebar ul > li > ul {
  height: 0;
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s, opacity 0.5s linear;
}
.sidebar ul > li > a > svg{
  margin-right: 5px;
}

.sidebar ul > li.open > ul{
  height: 100%;
  visibility: visible;
  opacity: 1;
  background: #5E5E5E;
}

.sidebar ul > li.open{
  height: 100%;
  visibility: visible;
  opacity: 1;
}

.sidebar ul > li > ul > li a{
  padding: 10px 20px 10px 20px;
}
.sidebar ul > li > ul > li > ul > li a{
  padding: 10px 30px 10px 30px;
}
.sidebar ul > li.active > a{
	color: white;
}
.sidebar ul > li.active > a:only-child{
  border-left: 5px solid white;
}
.sidebar ul > li.active > a:after{
  margin-left: -5px;
}

.sidebar ul > li.sub-menu > a:before{
  font-family: "Font Awesome 5 Free";
  content: "\f078";
  font-weight: 900;
  float: right;
  color: black;
  /*line-height: 15px;
  padding: 10px;*/
}
.sidebar ul > li.sub-menu.open > a:before{
  font-family: "Font Awesome 5 Free";
  content: "\f077";
  font-weight: 900;
  float: right;
  color: black;
  /*line-height: 15px;
  padding: 10px;*/
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
.content{
  float: right;
  position: relative;
  margin-top: 50px;
  height: 100%;
  margin-left: 200px;
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
      <li><a href="home.html"><i class="fa fa-cube"></i> Menu item 1</a></li>
      <li><a href="home.html"><i class="fa fa-cubes"></i> Menu item 2</a></li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-trash"></i> Menu item with submenu</a>
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
      <li  class="active">
        <a href="javascript:void(0);"><i class="fa fa-pencil-alt"></i> Menu item with submenu 2</a>
        <ul>
          <li  class="active">
            <a href="javascript:void(0);">Submenu item</a>
            <ul>
              <li  class="active">
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
  <div class="content">
    <ul id="lis-angka">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>

  <script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
	<!-- <script type="text/javascript" src="node_modules/jquery-ui-dist/jquery-ui.js"></script> -->

<script type="text/javascript">

$(document).ready(function(){

  $('.sidebar ul > li:has(ul)').addClass('sub-menu');

  $('.sidebar ul > li.active:has(ul)').addClass('open');
  

	$('.sidebar ul > li:has(ul) a').on('click', function(a){

      $(this).parent().siblings().removeClass('open').show(2500);
      $(this).parent().toggleClass('open').show(2500);
  });

  $('#lis-angka > li').each(function(a){
    $(this).text(a);
  })
});

</script>
</body>
</html>