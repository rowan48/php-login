<?php
session_start();
require_once ("vendor/autoload.php");

$username="";
$password="";
$remember_me=false;

if (isset($_POST["submit"])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
    if (isset($_POST["checkbox"])){
        $_POST["remember_me"]=true;

    }
    $_SESSION["name"]=$username;
    counter::counts();
    $my_user = new user($username, $password);//will be send to  the db
    var_dump($my_user);
    if(Login::Authenticate($_POST["username"],$_POST["password"],$_POST["remember_me"]))
    { $_SESSION["userid"]=5;
   $page="user";}
    else {
        echo "not found";
        $page="login";
    }

}


/*
if (isset($_POST["username"])){
    counter::counts();
    $my_user = new user("$username", "$password");//
    var_dump($my_user);

    /*if(Login::Authenticate($_POST["username"],$_POST["password"])){
        $_SESSION["userid"]=5;//it is supposed to sent this data to the database and retrieve the id from the db id then add it to the session userid;
        header("Location: index.php?page=user");
    }else{
        echo"error data";
    }*/
//}

else {
    if (!Login::check_Login()) {
        //if the user is not logged in redirect him to the login page
        //for future use we will use the header part to redirect the user for login page
        //for now we will use the require_once as we will reload this page;
        //require_once ("views/login.php");
        $page = "login";
       // counter::counts();

    } else {
        //if the user is logged in
       // $my_user = new user("$username", "$password");//
        //it is supposed to take the data of the user from the entered usernam & password
        echo "<br>";
        echo"my_user";
        echo"<br>";
        ///var_dump($my_user);
        $page = "user";
        echo "<center>================WELCOME====================</center>";

    }

}
$pages = array("login", "user");
//$page = (isset($_GET["page"]) && in_array($_GET["page"], $pages)) ? $_GET["page"] : "login";
require_once("views/$page.php");


