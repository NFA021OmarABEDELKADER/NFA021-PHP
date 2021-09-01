<!Doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" content="University Management System">
		<meta name="author" content="OMARABEDELKADER">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <header class="container header_area" >
			<div id="sticker">
				<div class="head">
					<a href="#               "><div class="logo fix">
						<img src="img/logo.png" alt="" />
					</div></a>
					<div class="uniname fix">
					<h2>University Management System</h2>
					</div>
				</div>
				<div class="menu ">
					<div class="dateshow fix"><p><?php echo "Date : ".date("d M Y"); ?></p></div>
					<ul>
						<?php if($user->get_admin_session()){ ?>
						<li><a href="admin_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
						<li><a href="admin.php"><i class="fa fa-cog" aria-hidden="true"></i> Options</a></li>
						<li><a href="admin.php"><i class="fa fa-user" aria-hidden="true"></i>
						<?php echo $admin_name; ?>
						</a></li>
						
						<?php } ?>
					</ul>

				</div>
			</div>
		</header>
		<div class="info container fix">
