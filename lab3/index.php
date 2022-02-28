<?php
session_start();
require_once ("vendor/autoload.php");
$name = $email="";



if (isset($_POST["submit"])) {
    $name =$_POST["name"];
    $email=$_POST["email"];
        counter::counts();


}
//(new counter)->self::counts();




?>




<html lang="en">
<head>
    <title> contact form </title>
</head>

<body>
<h3>  </h3>
<h4></h4>
<div id="after_submit">

</div>
<form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">

    <div class="row">
        <label class="required" for="name">user_id"unique_id":</label><br />
        <input id="name" class="input" name="name" type="text" value="" size="30" /><br />

    </div>
    <div class="row">
        <label class="required" for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" size="30" /><br />

    </div>

    <input id="submit" name="submit" type="submit" value="Send email" />



</form>
</body>

</html>
