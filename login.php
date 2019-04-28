<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Röpke SE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

    input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
    width: 40%;
    border-radius: 50%;
    }

    .container {
    padding: 16px;
    }

    span.psw {
    float: right;
    padding-top: 0;
    }

    .cancelbtn {
        width: 100%;
    }
    }
    </style>
</head>
<body>
	 <div class="outer-container">
	<header>
		<a href="index.php" class="logo float-left">
		<img src="images/hlogo.png" alt="logo"></a>
		<h1>Röpke SE Röplabda Klub</h1>
	</header>
	<div id="wrapper">
		<nav>
			<ul>
				<li><a href="index.php">Főoldal</a></li>
				<li><a href="sponsors.php">Támogatóink</a></li>
				<li><a href="registration.php">Regisztráció</a></li>
				<li><a class="active" href="login.php">Belépés</a></li>
				<li><a href="gallery.php">Galéria</a></li>
				<li><a href="contact.php">Kapcsolat</a></li>
			</ul>
			<a href="http://ropkese.hu/#" target="_blank">Forrás</a>
		</nav>
    </div>
    <section id="content">
    <form action="/action_page.php">
    <div class="container">
        <h2>Belépés</h2>
        <input type="text" placeholder="Felhasználónév" name="uname" required>
        <input type="password" placeholder="Jelszó" name="psw" required>
        <button type="submit">Beléps</button>
        <label>
        <input type="checkbox" checked="checked" name="remember">Emlékezz rám
        </label>
        <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>
    </section>
    <?php include('./templates/footer.php') ?>

 </html>