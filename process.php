<?php
if(isset($_POST['submit'])){
    print_r($_FILES['images']);
}else{
    header('location:signin.php');
}
?>
