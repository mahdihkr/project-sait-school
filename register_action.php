<?php
include("them-header.php");
$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];

      $link=mysqli_connect("localhost","root","","onenewsdb");
      $result=mysqli_query($link,"INSERT INTO `user`(`name`, `username`, `password`) 
                    VALUES ('$name','$username','$password')");
mysqli_close($link);

if($result===true){
    ?>
<script>
    location.replace("index.php");
</script>
<?php
    
}else{
    echo("ثبت نام  نشد");
}

?>

<?php
include("them-footer.html");
?>