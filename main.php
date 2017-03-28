<?php
session_start();
if(isset($_SESSION['name']))
$name=$_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Welcome to Superchef</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Hover Effect Ideas: Inspiration for subtle hover effects" />
  <meta name="keywords" content="hover effect, inspiration, grid, thumbnail, transition, subtle, web design" />
  <meta name="author" content="Codrops" />
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/modal.css">
  <link rel="stylesheet" type="text/css" href="css/modal1.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../favicon.ico">
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="normalize.css" />
  <link rel="stylesheet" type="text/css" href="demo.css" />
  <link rel="stylesheet" type="text/css" href="set2.css" />
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link href="https://www.shieldui.com/shared/components/latest/css/light/all.min.css" rel="stylesheet" />
  <link href="css/theme.css" rel="stylesheet">
  <script type="text/javascript" src="script/script.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="script/script.js"></script>
        <script type="text/javascript" src="js/jquery-2.0.0.js"></script>
        <script type="text/javascript" src="script/modal.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function Validateform()
{
var pass=document.getElementById("pass1");
var cpass=document.getElementById("pass2");
if(pass.value!=cpass.value)
{
  alert("Passwords Don't match");
  document.getElementById("pass2").focus();
  return false;
}
}
</script>

<style>

 .abc:hover{
    /*filter: none;-webkit-filter: grayscale(100%);*/
 background-color:rgba(0,0,0,1);
}


div.description{
  position:absolute; /* absolute position (so we can position it where we want)*/
  bottom:0px; /* position will be on bottom */
  left:0px;
  width:100%;
        height:25%;
  /* styling bellow */
  background-color:black;

  color:white;
  opacity:0.7; /* transparency */
  filter:alpha(opacity=100); /* IE transparency */
}
p.description_content{
  padding:10px;
  margin:0px;
}

</style>
</head>

<body>
<!--Navbar menu-->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="sidenav">
    <span class="menu-trigger" >Menu</span>
</div>

<div class="nav-menu">
<ul class="topnav" id="myTopnav">
<?php
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  echo "<li id='right' style='padding-top:13px;font-size:20px;color:white;background-color:#cc0000;border-radius:5px;border: 3px solid #262626;'>";
  echo "Hello ". $_SESSION['name'];
  echo "</li>
<li id='right'><a href='logout.php' id='logout'><i class='glyphicon glyphicon-log-out' width='10%';></i>&nbsp;<b style='font-size: 18px;padding:1px;'>Log out</b></a></li>
<li id='right'><a href='loggedin.php'><img src='image/search.png' style='float:left;width:26px'> &#160 Find Recipe</a></li>
  <li id='right'><a href='main.php'><img src='image/food2.png' style='float:left;width:30px;height:30px;'>&#160 Home</a></li>
 </li>";
  }
  else{
   echo "<li><img  src='image/logo2.png' style='width:170px;height:43px'></li>
   <li id='right' style='background-color:#cc0000;border-radius:5px;border: 3px solid #262626;'><a href='#' data-toggle='modal' data-target='#signup'><span class='glyphicon glyphicon-user'></span>Create Account</a></li>
  <li id='right'><a href='#' data-toggle='modal' data-target='#login'><span class='glyphicon glyphicon-log-in'></span> Login</a>
  <li id='right'><a href='home.php'><img src='image/search.png' style='float:left;width:26px'> &#160 Find Recipe</a></li>
  <li id='right'><a href='main.php'><img src='image/food2.png' style='float:left;width:30px;height:30px;'>&#160 Home</a></li>
 </li>";
}
?>
</ul>
</div>
</nav>


<!-- Carousel -->
<div id="theme-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#theme-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#theme-carousel" data-slide-to="1"></li>
    <li data-target="#theme-carousel" data-slide-to="2"></li>
  </ol>


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/cara3.jpg" alt="carousel1" style="width:100%" />
            <div class="carousel-caption">
            <!--<h1 style="padding-bottom:0px;font-size:70px;font-family:'Lucida Calligraphy'">Welcome</h1>
            <br>
             <h1 style="padding-bottom:280px;font-size:70px;font-family:'Lucida Calligraphy'">to Superchef</h1>-->
        <h2 style="text-shadow: 2px 2px 4px black;font-size:165%"> "People who love to eat are always the best people"</h2>
        <p style="text-shadow: 2px 2px 4px black;">Julia Child</p>
      </div>
    </div>
    <div class="item">
      <img src="image/cara1.jpg" alt="carousel2" style="width:100%"/>
    </div>
    <div class="item">
      <img src="image/cara2.jpg" alt="carousel3" style="width:100%">
        </div>
  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#theme-carousel" role="button" data-slide="prev">
        <div class="carousel-control-arrow">&#8249;</div>
  </a>
  <a class="right carousel-control" href="#theme-carousel" role="button" data-slide="next">
        <div class="carousel-control-arrow">&#8250;</div>
  </a>
</div>

<div class="container-about">
    <div class="container">
        <div class="page-header" id="about">
            <h1 class="text-center text-danger">A Little About Our Website </h1>
            <div  class="container text-center">
            <p style="padding:5px 15%">Superchef is a website about finding the recipe by just entering the ingredients.We provide recipes in six different flavours like Indian,Chinese,Mexican,Italian,Thai and French.First you have to select the ingredients that you want in your recipe and then you need to select the cuisine.You can also upload your own recipe on Superchef.We have also provided the feature of sharing your favaurite recipe with your friends on facebook</p>
            </div>
        </div>
    </div>
</div>

<div class="container-services">

    <div class="container text-center">
        <div class="page-header" id="services">
            <h1 class="text-center text-default">We Provide Recipes in Following flavours</h1>
        </div>

 <div class="row">
    <div class="col-sm-4">
    <br>
      <p class="text-center"><strong>Italian</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="image/italy.png" class="img-circle person" alt="Random Name" width="255" height="240">
      </a>

    </div>
    <div class="col-sm-4">
    <br>
      <p class="text-center"><strong>French</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="image/french.png" class="img-circle person" alt="Random Name" width="255" height="240">
      </a>

    </div>
    <div class="col-sm-4">
    <br>
      <p class="text-center"><strong>Indian</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="image/indian.png" class="img-circle person" alt="Random Name" width="310" height="300">
      </a>
    </div>
    <br>

        <div class="col-sm-4">
        <br>
           <p class="text-center"><strong>Mexican</strong></p><br>
             <a href="#demo2" data-toggle="collapse">
              <img src="image/mexican.png" class="img-circle person" alt="Random Name" width="255" height="240">
             </a>
        </div>
       <div class="col-sm-4">
       <br>
           <p class="text-center"><strong>Chinese</strong></p><br>
             <a href="#demo2" data-toggle="collapse">
              <img src="image/chinese.png" class="img-circle person" alt="Random Name" width="255" height="240">
             </a>
        </div>
       <div class="col-sm-4">
       <br>
           <p class="text-center"><strong>Thai</strong></p><br>
             <a href="#demo2" data-toggle="collapse">
              <img src="image/thai.png" class="img-circle person" alt="Random Name" width="255" height="240">
             </a>
        </div>
  </div>
</div>
</div>
</div>

<div class="container-dishes" >
  <div class="clearfix hidden-xs" style="width:100%; height:10px;"></div>
  <div class="container">
    <div class="page-header" id="dishes">
      <h1 class="text-center text-danger">SuperChef's Recommended</h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="image/crostini.jpg" class="img-responsive" width="470" height="400" />
            <h4 class="text-danger">Crostini</h4>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="image/Duchesse Potatoes.jpg" class="img-responsive" width="483" height="400"/>
            <h4 class="text-danger">Duchesse Potatoes</h4>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="image/Mexican Veggie Tacos.jpg" class="img-responsive" width="490" height="400"/>
            <h4 class="text-danger">Mexican Veggie Tacos</h4>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="image/Risotto-StuffedMushrooms.jpg" class="img-responsive" width="517" height="400"/>
            <h4 class="text-danger">Risotto-StuffedMushrooms</h4>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix hidden-xs" style="width:100%; height:50px;"></div>
</div>





<footer id="footer" class="clearfix" style="background-color:#404040">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

            </div>
            <div class="col-md-4">
                <p style="text-align:center"><span class="glyphicon glyphicon-copyright-mark"></span>Copyright Superchef 2016 </a></p>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<link href="css/magnific-popup.css" rel="stylesheet">
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/theme.js"></script>

<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color:white">Sign Up</h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form" action="reg_form.php" method="post" onsubmit="return Validateform()">

                    <div class="form-group">
                        <div class="input-group" style="width:100%;">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control" id="email1" name="email1" placeholder="Email" required>
                            <label for="email1" class="input-group-addon glyphicon glyphicon-user" style="background-color:#00897B"></label>
                        </div>
                    </div> <!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Password" required>
                            <label for="pass1" class="input-group-addon glyphicon glyphicon-lock" style="background-color:#00897B"></label>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm Password" required>
                            <label for="pass2" class="input-group-addon glyphicon glyphicon-lock" style="background-color:#00897B"></label>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.form-group -->

            </div> <!-- /.modal-body -->

            <div class="modal-footer">
                <button class="form-control btn btn-primary" style="background-color:#00897B" type="submit">Sign Up</button>
            </div> <!-- /.modal-footer -->

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color:white">Log in</h4>
            </div> <!-- /.modal-header -->

            <div class="modal-body">
                <form role="form" action="login.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            <label for="email" class="input-group-addon glyphicon glyphicon-user" style="background-color:#00897B"></label>
                        </div>
                    </div> <!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                            <label for="pass" class="input-group-addon glyphicon glyphicon-lock" style="background-color:#00897B"></label>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.form-group -->

            </div> <!-- /.modal-body -->

            <div class="modal-footer">
                <button class="form-control btn btn-primary" style="background-color:#00897B" type="submit">Login</button>
            </div> <!-- /.modal-footer -->

            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>
