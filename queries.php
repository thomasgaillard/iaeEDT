<?php
	session_start();

	if(isset($_POST['branchId']) && $_POST['branchId'] != "")
		$_SESSION['branchId'] = $_POST['branchId'];
	elseif(!isset($_SESSION['branchId']) || $_SESSION['branchId'] == "")
			$_SESSION['branchId'] = 3268;//default : M1 MTI

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://ade52-savoie.grenet.fr/ade/custom/modules/plannings/direct_planning.jsp?projectId=4&login=ETUDIANT&password=etsa");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION,0);
	curl_setopt($curl, CURLOPT_COOKIEFILE, 'cookie.txt');
	curl_setopt($curl, CURLOPT_USERAGENT, 'PHP');
	$page=curl_exec($curl);
	
	curl_setopt($curl, CURLOPT_URL, "http://ade52-savoie.grenet.fr/ade/standard/gui/tree.jsp?category=trainee&branchId=".$_SESSION['branchId']."&selectId=".$_SESSION['branchId']);
	$page=curl_exec($curl);
	
	curl_setopt($curl, CURLOPT_URL, "http://ade52-savoie.grenet.fr/ade/custom/modules/plannings/pianoDays.jsp?forceLoad=true");
	$page=curl_exec($curl);
	
	curl_setopt($curl, CURLOPT_URL, "http://ade52-savoie.grenet.fr/ade/standard/gui/set_tree.jsp?href=/custom/modules/plannings/plannings.jsp&target=visu");
	$page=curl_exec($curl);
	
	curl_setopt($curl, CURLOPT_URL, "http://ade52-savoie.grenet.fr/ade/custom/modules/plannings/imagemap.jsp");
	$page=curl_exec($curl);
	
	echo $page;
	curl_close($curl);
?>