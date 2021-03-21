<?php 
	##################################
	###       LOAD config file       ###
	##################################
	require_once __DIR__ .'/../includes/config.php';
	##################################
	###       LOAD FUNCTIONS       ###
	##################################

	require_once __DIR__ .'/functions.php';	

	##################################
	###       LOAD classes       ###
	##################################
	require_once __DIR__ .'/../classes/db.class.php';

	require_once __DIR__ .'/../classes/auth/auth.class.php';

	$session = new Zebra_Session($db, 'sEcUr1tY_c0dE');
	// $mdb = new MeekroDB($db);

 ?>