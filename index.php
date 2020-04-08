<?php
	require './CLI.php';

	$cli= new AppCLI();

	// $cli->crateCommand('help', 'help', 'index');
	$cli->crateCommand('help', function()
	{
		
	});
	
	print_r($cli->run($argv));
