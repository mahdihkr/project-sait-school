<?php
include("them-header.php");

$username=$_POST["username"];
$password=$_POST["password"];

$link = mysqli_connect("localhost", "beesio_root", "m123456", "beesio_root");
$result=mysqli_query($link,"SELECT * FROM `user` WHERE `username`='$username' and `password`='$password';");
mysqli_close($link);
$row=mysqli_fetch_array($result);

if($row==true){
    $_SESSION["login"]=true;
    $_SESSION["name"]=$row["name"];
    if($row["admin"]==true){
        $_SESSION["manager"]=true;
    }
    ?>
<script>
    location.replace("index.php");
</script>
    <?php

}else{
    echo("ورود  نشد");
}

?>

<?php
include("them-footer.html");
?>