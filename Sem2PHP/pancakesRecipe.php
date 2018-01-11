<?php
require('startUp.php')
?>
<!DOCTYPE html>
<html>
<head>

    <link rel = "stylesheet" type = "text/css" href = "resources/css/reset.css"/>
    <link rel = "stylesheet" type = "text/css" href = "resources/css/main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "resources/css/recipesAndIndex.css"/>
    <meta charset="UTF-8">
    <title>Document Title</title>

</head>
<body class="recipe">
<!-- <h4>Generic Cooking Website Name</h4> -->
<?php
require('menu.php');
?>
<section>
    <h1>Pancakes recipe </h1>
    <img class="recipe-image" src="resources/images/pancakes.jpg" style="width:80%" alt="pancakes"/>
</section>
<div class="recipeContainer">
    <aside class="ingredients">
        <h2>Ingredients </h2>
        <h3>Pancakes </h3>
        <ol>
            <li class="ingredients"> 7 1/2 dl white flour </li>
            <li class="ingredients">1 tsp salt </li>
            <li class="ingredients">14 dl milk </li>
            <li class="ingredients">8 eggs </li>
            <li class="ingredients"> 75 g margarine </li>

        </ol>
    </aside>
    <section class="subsection">
        <h2>Directions </h2>
        <h3> Pancakes </h3>
        <p> Mix the flour and salt in a bowl. Whisk in half of the milk until you have a smooth dough. Whisk in the rest of the milk and the eggs.
        </p>
        <p> At this stage it's recommended to let the dough cool off for half an hour. 	 </p>
        <p> Melt half of the margarine in a pot or frying pan and whisk it into the dough. Use the rest of the margarine for frying the pancakes. </p>
        <h3 class = "reference"> References </h3>
        <p> https://www.ica.se/recept/pannkakor-713938/  </p>
        <?php
        require('pancakescomments.php');
        ?>
        <?php
        if(isset($_COOKIE["user"])){
            echo 'Comment as: '.$_COOKIE["user"];
            echo "<form class=\"formComment\" action=\"comment.php\" method=\"post\">";
            echo "<input  type=\"text\" name=\"comment\"  />";
            echo "<input  type=\"hidden\" name=\"recipe\" value=\"pancakescommentsold\" />";
            echo "<input  type=\"hidden\" name=\"user\" value=\"".$_COOKIE["user"]."\" />";
            echo "<input type=\"hidden\" name=\"site\" value=\"".htmlspecialchars(basename($_SERVER['REQUEST_URI']))."\" />";
            echo "<input  type=\"submit\" value=\"Post comment\" />";
            echo "</form>";




        }
        ?>
    </section>
</div>








</body>
</html>