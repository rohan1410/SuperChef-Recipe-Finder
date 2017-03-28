
<!DOCTYPE html>
<html lang="en">
<head>
        <title>SuperChef</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link rel="stylesheet" type="text/css" href="css/modal1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
   	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="script/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery-2.0.0.js"></script>
        <script type="text/javascript" src="script/modal.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>


  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Hover Effect Ideas: Inspiration for subtle hover effects" />
		<meta name="keywords" content="hover effect, inspiration, grid, thumbnail, transition, subtle, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="normalize.css" />
		<link rel="stylesheet" type="text/css" href="demo.css" />
		<link rel="stylesheet" type="text/css" href="set2.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome.min.css" />
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

<!--<body background="image/ing90.jpg">-->
<body style="background-color: #d9d9d9;">


<div class="sidenav">
<span class="menu-trigger">Menu</span>
<span class="recipe-trigger" >Recipe</span>
</div>

<div class="nav-menu">
<ul class="topnav" id="myTopnav">
  <li><img  src="image/superchef.png" style="width:110px;height:70px"></li>
  <li id="left"><a href="#"><img src="image/search.png" style="float:left;width:26px"> &#160 Find Recipe</a></li>
  <li id="left" class="dropdown"><a href="javascript:void(0)" class="dropbtn" onclick="myFunction()"><img src="image/food2.png" style="float:left;width:30px;height:30px;">&#160 Dishes</a>
  <li id="left"><a href="recipe.html"> <b><span style="font-size:23px;float:left">&#43;</span></b> &#160 Upload Recipe</a></li>
  <li id="right"><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  <li id="right" style="background-color:#cc0000;border-radius:5px;border: 3px solid #262626;"><a href="#" data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"></span>Create Account</a></li>
</ul>
</div>

<div class="left-menu" >

<p class="sidenav-head">Ingredients</p>
<form action="#" method="post">
<table>
  <tr><td><input type="checkbox" name="ingredients_list[]" value="beans" id="beans" class="css-checkbox" /><label for="beans" class="css-label">Beans</label></td>
  <td><input type="checkbox" name="ingredients_list[]" value="cheese" id="cheese" class="css-checkbox" /><label for="cheese" class="css-label">Cheese</label></td></tr>
  <tr><td><input type="checkbox" name="ingredients_list[]" value="flour" id="flour" class="css-checkbox" /><label for="flour" class="css-label">Flour</label></td>
  <td><input type="checkbox" name="ingredients_list[]" value="garlic" id="garlic" class="css-checkbox" /><label for="garlic" class="css-label">Garlic</label></td></tr>
  <tr><td><input type="checkbox" name="ingredients_list[]" value="mushroom" id="mushroom" class="css-checkbox" /><label for="mushroom" class="css-label">Mushroom</label></td>
  <td><input type="checkbox" name="ingredients_list[]" value="onion" id="onion" class="css-checkbox" /><label for="onion" class="css-label">Onion</label></td></tr>
  <tr><td><input type="checkbox" name="ingredients_list[]" value="potato" id="potato" class="css-checkbox" /><label for="potato" class="css-label">Potato</label></td>
  <td><input type="checkbox" name="ingredients_list[]" value="rice" id="rice" class="css-checkbox" /><label for="rice" class="css-label">Rice</label></td></tr>
  <tr><td><input type="checkbox" name="ingredients_list[]" value="spinach" id="spinach" class="css-checkbox" /><label for="spinach" class="css-label">Spinach</label></td>
  <td><input type="checkbox" name="ingredients_list[]" value="tomato" id="tomato" class="css-checkbox" /><label for="tomato" class="css-label">Tomato</label></td></tr>
</table>

<p class="sidenav-head">Cuisine Type</p>
<table>
  <tr><td><input type="radio" name="radio" value="chinese" id="radio4" class="css-checkbox" checked /><label for="radio4" class="css-label1 radGroup2" >Chinese</label></td>
<td><input type="radio" name="radio" value="french" id="radio7" class="css-checkbox" /><label for="radio7" class="css-label1 radGroup2">French</label></td></tr>
  <tr><td><input type="radio" name="radio" value="mexican" id="radio5" class="css-checkbox" /><label for="radio5" class="css-label1 radGroup2">Mexican</label></td>
<td><input type="radio" name="radio" value="thai" id="radio8" class="css-checkbox" /><label for="radio8" class="css-label1 radGroup2">Thai</label></td></tr>
  <tr><td><input type="radio" name="radio" value="italian" id="radio6" class="css-checkbox" /><label for="radio6" class="css-label1 radGroup2">Italian</label></td>
<td><input type="radio" name="radio" value="indian" id="radio9" class="css-checkbox" /><label for="radio9" class="css-label1 radGroup2">Indian</label></td></tr>
</table>
<input type="submit" name="submit" value="Search Recipe" />
</form>
</div>

<?php
//echo "hi";
mysql_connect("localhost","root","pass@123");
mysql_select_db("superchef");
if(isset($_POST['submit'])){     //to run PHP script on submit
if(!empty($_POST['ingredients_list'])){
// Loop to store and display values of individual checked checkbox.
$query="SELECT a.name,a.image,b.site FROM (";
$numItems = count($_POST['ingredients_list']);
//echo $numitems;
$i = 0;
foreach($_POST['ingredients_list'] as $selected){
$query.="SELECT * FROM ";
$query.=$selected;
if(++$i != $numItems){
$query.=" UNION ";
}
}
$query.=") AS a JOIN ";
$query.=$_POST['radio'];
$query.=" AS b ON b.name = a.name;";
//echo $query;
$res=mysql_query($query) or die($query."<br/><br/>".mysql_error());;
echo "<div class='grid'>";
while($row=mysql_fetch_array($res)){
    echo "<figure class='effect-kira'>";
    ?>
    <img src="<?php echo $row['image'];?>" alt="img05" width="100%"/>
    <?php
        echo "<figcaption>";
        echo "<h2 style='text-shadow: 2px 3px 5px black';>";
        echo $row["name"];
        echo "</h2>";
        echo "<p>";
        echo '<a href="'.$row['site'].'">'."<i class='fa fa-fw fa-home'></i></a>";
        echo "</p>";
        echo "</figcaption>";
        echo "</figure>";
}
echo "</div>";
}
else{
    echo "<div class='grid'>";
    echo "<h2>Please add some ingredients</h2>";
    echo "</div>";
}
}
else
echo "please ho ja:(";
?>

<!--<div class="grid" >


					<figure class="effect-kira">
						<img src="in3.jpg" alt="img05" />
						<figcaption>
		                                      <h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in2.jpg" alt="img05" />
						<figcaption>
		                                      <h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in5.jpg" alt="img05" />
						<figcaption>
		                                      <h2 style=" text-shadow: 2px 3px 5px black;">Dark Kira</h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in2.jpg" alt="img05" />
						<figcaption>
		                                      <h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05" />
						<figcaption>
		                                      <h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05" />
						<figcaption>
		                                      <h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05" />
						<figcaption>
		                                      <h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05" />
						<figcaption>
		                                      <h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05" />
						<figcaption>
		                                      <h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>

					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05" />
						<figcaption>
							<h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05" />
						<figcaption>
							<h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05"/>
						<figcaption>
							<h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>
					<figure class="effect-kira" >
						<img src="in4.jpg" alt="img05" />
						<figcaption>
							<h2>Dark <span>Kira</span></h2>
							<p>
								<a href="#"><i class="fa fa-fw fa-home"></i></a>
								<a href="#"><i class="fa fa-fw fa-download"></i></a>
								<a href="#"><i class="fa fa-fw fa-heart"></i></a>
								<a href="#"><i class="fa fa-fw fa-share"></i></a>
							</p>
						</figcaption>
					</figure>

				</div>-->


<!--
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <Modal content
    <div class="modal-content">
      <div class="modal-header" style="background-color:#595959">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Log In</h4>
      </div>
      <div class="modal-body">
        <input type="email" name="email" id="email" placeholder="Email"><br>
      <h4>Password:</h4>
        <input type="password" name="passwrord" id="password" placeholder="Password">
      </div>
      <div class="modal-footer" style="background-color:#595959">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sign In</button>
      </div>
    </div>
</div>
</div>
-->
<!--
 Modal
<div id="signup" class="modal fade" role="dialog">
  <div class="modal-dialog ">
 Modal content-
    <div class="modal-content">
      <div class="modal-header" style="background-color:#595959">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
      <div class="modal-body">
      <h4>Email:</h4>
        <input type="email" name="email" placeholder="email/username"><br>
      <h4>Password:</h4>
        <input type="password" name="password" placeholder="password">
      </div>
      <div class="modal-footer" style="background-color:#595959">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sign Up</button>
      </div>
    </div>
</div>
</div>
-->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel" style="color:#1fa67b">Sign Up</h4>
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
							<label for="email1" class="input-group-addon glyphicon glyphicon-user" style="background-color:#1fa67b"></label>
						</div>
					</div> <!-- /.form-group -->

					<div class="form-group">
						<div class="input-group">
							<input type="password" class="form-control" id="pass1" name="pass1" placeholder="Password" required>
							<label for="pass1" class="input-group-addon glyphicon glyphicon-lock" style="background-color:#1fa67b"></label>
						</div> <!-- /.input-group -->
					</div> <!-- /.form-group -->

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm Password" required>
                            <label for="pass2" class="input-group-addon glyphicon glyphicon-lock" style="background-color:#1fa67b"></label>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.form-group -->

			</div> <!-- /.modal-body -->

			<div class="modal-footer">
				<button class="form-control btn btn-primary" style="background-color:#1fa67b" type="submit">Sign Up</button>
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
				<h4 class="modal-title" id="myModalLabel" style="color:#1fa67b">Log in</h4>
			</div> <!-- /.modal-header -->

			<div class="modal-body">
				<form role="form" action="login.php" method="post">
					<div class="form-group">
						<div class="input-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
							<label for="email" class="input-group-addon glyphicon glyphicon-user" style="background-color:#1fa67b"></label>
						</div>
					</div> <!-- /.form-group -->

					<div class="form-group">
						<div class="input-group">
							<input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
							<label for="pass" class="input-group-addon glyphicon glyphicon-lock" style="background-color:#1fa67b"></label>
						</div> <!-- /.input-group -->
					</div> <!-- /.form-group -->

			</div> <!-- /.modal-body -->

			<div class="modal-footer">
				<button class="form-control btn btn-primary" style="background-color:#1fa67b" type="submit">Login</button>
			</div> <!-- /.modal-footer -->

            </form>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>
