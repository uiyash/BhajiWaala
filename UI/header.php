<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
$uid = $_SESSION['id'];
$msql = "SELECT * From user where id=" . $uid;
$mresult = mysqli_query($conn, $msql);
$mrow = mysqli_fetch_array($mresult);

$setting = json_decode($mrow['settings']);
// echo $setting->mode;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="windows-1252">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Team-Daxy">
	<meta name="description" content="Managements softwares that are safe, smooth and sexxy Contact: 8779113007">

	<title>DAXY🚖 | MS </title>

	<!-- editable table links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!-- end -->

	<!--Bootstrap v4.3.1-->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Font-awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!--dripicons -->
	<link href="css/dripicons.css" rel="stylesheet">
	<!-- fullcalendar -->
	<link rel="stylesheet" type="text/css" href="css/fullcalendar.min.css">
	<!-- perfect-scrollbar -->
	<link rel="stylesheet" type="text/css" href="css/perfect-scrollbar.css">
	<!-- bootstrap-select -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
	<!-- bootstrap-tour -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-tour-standalone.min.css">

	<!-- Custom -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Favicon -->
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.html" />
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../../ms-icon-144x144.html">
	<meta name="theme-color" content="#ffffff">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };Onion
        xmlhttp.open("GET","inc/result.php?stat=o&id="+str,true);
        xmlhttp.send();
    }
}
function showUser1(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","inc/result.php?stat=t&date="+str,true);
        xmlhttp.send();
    }
}
</script>
<!-- editable table js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/TableEditor/jquery.tabledit.js"></script>
<!-- <script type="text/javascript" src="js/custom_table_edit.js"></script> -->

    <!-- end -->
</head>

<body id="<?php
			if ($setting->mode === 1) {
				echo 'dark';
			} else {
				echo 'day';
			} ?>-mode">
	<div class="wrapper">
		<?php include_once('sidebar.php'); ?>
		<main class="contentWrapper container-fluid">

			<?php include_once('navbar.php'); ?>