<?php
	
	$tab = [];
	$i = 0;

	foreach($_POST as $key => $value){

    	$tab[$i] = $value;
    	$i++;
    	
	}

	$name = $tab[0];
	$password = $tab[1];
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=vagrant;charset=utf8', 'root', 'root');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare('SELECT * FROM user WHERE name = :name AND password = :password');
	$req->execute(array(
		
		'name' => $name,
		'password' => $password
	));

	$resultat = $req->fetch();

	if (!$resultat)
	{
	    echo 'Mauvais identifiant ou mot de passe !';
	}
	else
	{
	    session_start();
	    $_SESSION['nom'] = $resultat['name'];
	    $_SESSION['surname'] = $resultat['surname'];

	    ?>
	    <script type="text/javascript">
			document.location.replace('livredor.php');			
		</script>
		<?php
	}


?>
