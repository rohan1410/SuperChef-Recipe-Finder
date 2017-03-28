<?php
echo "hi";
mysql_connect("localhost","root","pass@123");
mysql_select_db("superchef");
if(isset($_POST['submit'])){     //to run PHP script on submit
if(!empty($_POST['ingredients_list'])){
// Loop to store and display values of individual checked checkbox.
$query="SELECT a.name,a.image FROM (";
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
echo $query;
$res=mysql_query($query) or die($query."<br/><br/>".mysql_error());;
//echo "<div class='grid'>";
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
        echo "<a href='#'><i class='fa fa-fw fa-home'></i></a>";
        echo "<a href='#'><i class='fa fa-fw fa-download'></i></a>";
        echo "<a href='#'><i class='fa fa-fw fa-heart'></i></a>";
        echo "<a href='#'><i class='fa fa-fw fa-share'></i></a>";
        echo "</p>";
        echo "</figcaption>";
        echo "</figure>";
}
//echo "</div>";
}
else{
    //echo "<div class='grid'>";
    echo "<h2>Please add some ingredients</h2>";
    //echo "</div>";
}
}
else
echo "please ho ja:(";
?>