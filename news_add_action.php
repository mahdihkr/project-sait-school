<?php
include("them-header.php");
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","onenewsdb");
$result=mysqli_query($link,"INSERT INTO `news`(`title`, `text`, `imageurl`) 
                    VALUES ('$title','$text','$imageurl')");
mysqli_close($link);
if($result===true){
    ?>
    <script>
        location.replace("news.php");
    </script>
    <?php
    
}else{
    echo("ذخیره  نشد");
}

?>

<?php
include("them-footer.html");
?>