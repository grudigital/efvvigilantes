<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HOMEALARMS - Alarms and security systems site template">
    <meta name="author" content="Ansonika">
    <title>EFV Vigilantes - Escola Feirense de formação de vigilantes</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/elegant_font/elegant_font.min.css" rel="stylesheet">
    <link href="css/fontello/css/fontello.min.css" rel="stylesheet">
    <link href="css/magnific-popup.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="css/blog.css" rel="stylesheet">


    <?php
    require("admin/connections/conn.php");
    $sql = "select * FROM seo where id = 1";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        echo "<script async src='https://www.googletagmanager.com/gtag/js?id=$row[analytics]'></script>";
        echo "<script>";
        echo "window.dataLayer = window.dataLayer || [];";
        echo "function gtag(){dataLayer.push(arguments);}";
        echo " gtag('js', new Date());";
        echo "gtag('config', '$row[analytics]');";
        echo "</script>";
        echo "<meta name='description' content='$row[description]'>";
        echo "<meta name='keywords' content='$row[keywords]'>";
    }
    ?>


</head>