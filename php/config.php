<!-- <?php
	session_start();

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "sr";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] &&!empty($_GET['lang'])){
		if ($_GET['lang'] == "sr")
			$_SESSION['lang'] = "sr";
		else if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "ru")
			$_SESSION['lang'] = "ru";
	}


	require_once "languages/" . $_SESSION['lang'] . ".php";
?> -->