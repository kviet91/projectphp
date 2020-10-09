<?php
    $mess = '';
   if(isset($_POST['userEmail'])){
       $email = $_POST['userEmail'];
       $pass = $_POST['passWord'];
       if($email == "viet@email" && $pass ==123 ) {
           $mess = "Dung Roi";
       }
       else {
           $mess = "Sai roi";
       }
   };
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php if ($mess != ''):?>
        <div class="alert alert-primary" role="alert">
            <?php echo $mess;?>
        <?php endif?>
        </div>
    </div>
</body>
</html>