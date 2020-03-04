

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mon Blog</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
   
		    <form action="config/functions.php" method="post">
		    	<input type="text" name="titre"/><br><br>
		    	<textarea name="contenu" id="contenu" cols="30" rows="10"></textarea><br><br>
		    	<input type="submit" value="Enregistrer" id="submit"><br><br><br>
		    </form>
	    
	    <section>
	    	<div class="title">
                        <ul>
	                      <?php 

			    		    // on se connecte toujours à notre base des données
		                    $bdd = new PDO('mysql:host=localhost:3308;dbname=miniblog','root','');

		                    //on prépare notre requete
		                    $sql = "SELECT id, titre FROM article ORDER BY datepubliee DESC";
		                    $req = $bdd->query($sql);

		                    while($row = $req->fetch()){

		                  ?> 
		                           <li><a href="article.php?id=<?= $row['id'] ?>"><?php echo $row['titre'] ?></a></li>
		                       <?php
		                    }
	                           ?>
	                    </ul>
	    	</div>
	    </section>
    </body>
</html>
