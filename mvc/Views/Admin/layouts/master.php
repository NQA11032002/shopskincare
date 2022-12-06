<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../Public/css/admin/style.css">
    <link rel="stylesheet" type="text/css" href="../Public/css/admin/responsive.css">
</head>

<body>
    <?php if(isset($_SESSION["logined"]) && strcmp($_SESSION["logined"][0]["role"],"Admin") == 0)
    {?>
    <div class="contain">
        <div class="contain-left">
            <?php require_once "./mvc/Views/Admin/blocks/SideBar.php" ?>
        </div>
        <div class="contain-right">
            <div class="contain-right__top">
                <?php require_once "./mvc/Views/Admin/blocks/Header.php" ?>
            </div>

            <div class="contain-right__bottom">
                <div class="contain-right__bottom--breadcrumb">
                    <?php require_once "./mvc/Views/Admin/blocks/Breadcrumb.php" ?>
                </div>

                <div class="contain-right__bottom--content">
                    <?php require_once "./mvc/Views/Admin/pages/".$data["page"].".php" ?>
                </div>
            </div>
        </div>
    </div>
    <?php }
    else
    {
        header("location: http://localhost/MyPham/DangNhap");
    }
    ?>
</body>

</html>