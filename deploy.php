<?php
	/**
	 * A script to pull updates from git, so that it reflects on site
	 * 
	 * Git pull updates and update local folder.
	 *
	 */

	// An array in which following commands will run in sequence.
	$commands = array(
		'echo $PWD',
		'whoami',
		'git pull',
		'git status',
	);

	// Display it pretty formatted.
	$htmlout = '';
	foreach($commands AS $command){
		// Shell run it
		$tmp = shell_exec($command);
		// Output
		$htmlout .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$htmlout .= htmlentities(trim($tmp)) . "\n";
	}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Deploy it</title>
</head>
<body style="font-weight: bold; padding: 0 10px;">
<pre>
 <?php echo $htmlout; ?>
</pre>
</body>
</html>
