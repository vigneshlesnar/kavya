
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- <meta name="viewport" content="width=device-width;" /> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <style>
        body {
    overflow-x: hidden;
    width: 100%;
}

    </style>
            <!-- navbar -->

        <?php include('assets/php/navbar.php')?>

        <!-- slider -->
        <?php include('assets/php/slider.php')?>

        <!-- vision -->
        <?php include('assets/php/vision.php')?>

        <!-- About us -->
        <?php include('assets/php/about.php')?>

        <div style="background-color:#fff">
        <!-- Services -->
        <?php include('assets/php/services.php')?>
        </div>

        <!-- Clents -->
        <?php include('assets/php/clients.php')?>

        <!-- Timeline -->
        <div style="background-color:#fff;">
              <?php include('assets/php/timeline.php')?>
        </div>
        
        <!-- Clents -->
        <?php include('assets/php/contact.php')?>
    
</body>
</html>