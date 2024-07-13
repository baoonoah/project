<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "https://i.pinimg.com/236x/80/0e/38/800e383df092291f6f79b574817cbdc9.jpg" type = "image/x-icon">
    <title>GiaBao's Project</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/xuly.js"></script>
    <style>
         a{
    text-decoration:none;
  }
    </style>
</head>

<body>
    <div class="wrapper"> 
        <!--  -->
       <?php include("admin/database/config.php")?>
         <!-- header -->
         <?php include ("pages/header.php") ?>
        <!-- menu -->
        <?php include ("pages/menu.php") ?>
        <!-- main -->
        <?php include ("pages/main.php") ?>
        <!-- footer -->
        <?php include ("pages/footer.php") ?>
</div>
</body>
</html>