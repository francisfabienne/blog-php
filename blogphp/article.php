<?php 

if(isset($_GET['id']) && !empty($_GET['id'])){

	$sql = "SELECT * FROM  article WHERE id =".$_GET["id"];
	$bdd = new PDO('mysql:host=localhost:3308;dbname=miniblog','root','');

    //on prépare notre requete

    $req = $bdd->prepare($sql);
    $req = $bdd->query($sql);

    //on declare notre variable article

    $article = $req->fetch();
    if($req->rowCount()==  0){ 
    	header('location: index.php');
    }

} else {

	header('location: index.php');
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php">retour liste d'articles</a>
	<div>
		<h1><?php echo  $article['titre'] ?></h1>
		<p>
			<?php echo $article['contenu'] ?>
		</p>
	</div>
</body>
</html>