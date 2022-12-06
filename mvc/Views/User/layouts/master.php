<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="./Public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="./Public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="./Public/css/Responsive.css">
</head>

<body>
    <?php
        require_once "./mvc/Views/User/blocks/Header.php";
    ?>

    <div class="contain">
        <?php require_once "./mvc/Views/User/pages/".$data["page"].".php" ?>
    </div>

    <?php
        require_once "./mvc/Views/User/blocks/Footer.php";
        require_once "./mvc/Views/User/blocks/ScrollTop.php";
    ?>

    <script type="text/javascript" src="./Public/js/script.js"></script>
    <script type="text/javascript" src="./Public/js/ajax.js"></script>
    <script type="text/javascript" src="./Public/js/mobile.js"></script>
</body>

</html>