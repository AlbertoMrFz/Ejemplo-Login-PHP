<div style="width: 70%; margin: 0 auto; margin-top: 50px;border: 5px solid black;">
	<?php
	if (isset($error) && trim($error) != "")
	{
		?>
		<h2><?php echo $error; ?></h2>
		<?php
	}
	else
	{
		?>
		<h1>Bienvenido <?php echo $_SESSION['user']; ?></h1>
		<?php
	}
	?>
</div>