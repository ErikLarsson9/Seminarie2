<!DOCTYPE html>
<html>
<head>

    <link rel = "stylesheet" type = "text/css" href = "../resources/css/reset.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../resources/css/main.css"/>
    <link rel = "stylesheet" type = "text/css" href = "../resources/css/recipesAndIndex.css"/>
    <meta charset="UTF-8">
    <title>Document Title</title>

</head>
<body>


    <form action="../login.php" method="post">
        <h1>Log In</h1>
        <p>Username: </p>
        <input type="text" name="username"  />
        <p>Password:</p>
        <input type="password" name="password" " />
<!--  Possible options for input  size="n" maxlength="m"-->

        <input type="submit" value="Log In" />
        <button onclick="goBack()">Go Back</button>


    </form>






</body>
</html>