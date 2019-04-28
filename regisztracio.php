<?php include('./templates/head.php') ?>
	<header>
		<img src="hlogo.png" alt="logo">
		<h1>Röpke SE Röplabda Klub</h1>
	</header>
	<div id="wrapper">
		<nav>
			<ul>
				<li><a href="index.php">Főoldal</a></li>
				<li><a href="bemutatkozas.html">Bemutatkozás</a></li>
				<li><a class="active" href="regisztracio.php">Regisztráció</a></li>
				<li><a href="belepes.html">Belépés</a></li>
				<li><a href="kapcsolat.php">Kapcsolat</a></li>
			</ul>
			<a href="http://ropkese.hu/#" target="_blank">Forrás</a>
		</nav>
	</div>
	<section id="content">
	<div class="container">
		<h2>Regisztráció</h2>
		<from action="regisztral.php">
			<label>Név: <input name="nev" type="text"></label><br><br>
			<label>E-mail: <input name="email" type="text"></label><br><br>
			<label>Születési év: <select name="szulev">
			<?php for($ev=1900;$ev<2010;$ev++){?>
				<option value="<?php echo $ev?>"><?php echo $ev?></option>
			<?php }?>
			</select></label>
			<label>Születési hónap: <select name="szulho">
			<?php for ($ho=1; $ho<=12;$ho++){?>
			<option value="<?php echo $ho?>"><?php echo $ho?></option>
			<?php } ?>
			</select></label>
			<label>Születési nap: <select name="szulnap">
			<?php for ($nap=1;$nap<=31;$nap++) {?>
				<option value="<?php echo $nap?>"><?php echo $nap?></option>
			<?php }?>
			</select></label>
			<br><br>
			<fieldset>
				<legend>Testsúly: </legend>
				<?php for ($suly=0; $suly<140;$suly+=10){?>
				<label><input name="suly" value="<?php echo $suly?>" type="radio">
				<?php echo $suly . ' - ' . ($suly+10); ?><br></label>
				<?php }?>
			</fieldset>
			<br>
			<input value="Űrlap Feladása" type="submit">
		</form>
	</div>
	</section>
	<?php include('./templates/footer.php') ?>
</html>
