<?php
	
	$tab = [];
	$i = 0;

	foreach($_POST as $key => $value){

    	$tab[$i] = $value;
    	$i++;
    	
	}

	$author = $tab[0];
	$message = $tab[1];
	echo 'Le message a bien ete enregistre ! ';
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=vagrant;charset=utf8', 'root', 'root');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO message(message, name_author) VALUES(:message, :name_author)');
	$req->execute(array(
		
		'message' => $message,
		'name_author' => $author
	));

	


?>
<script type="text/javascript">
	setTimeout(function() {
		Closepopup('#layer-livre');
	 
	}, 2000);
	
</script>