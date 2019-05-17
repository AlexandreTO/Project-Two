<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Test PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="Bootstrap/css/bootstrap.css" />
    <link href="Bootstrap/css/mdb.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <script src="Bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="Bootstrap/js/popper.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/mdb.min.js"></script>
    <script src="main.js"></script>
    <!-- DANS CET ORDRE -->
</head>

<body>
    <?php
            /*
            Code afin de vérifier si on est connecté à la BDD
            */
              try {
                $bdd = new PDO('mysql:host=localhost;dbname=projet;', 'root', 'root');
              } 
              catch (Exception $e) {
                  die('Erreur: ' . $e->getMessage());
              }
            ?>
    <?php 


        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $date= $_POST['date'];
        $adresse= $_POST['adresse'];
        $code_postal= $_POST['code_postal'];
        $email = $_POST['email'];
        $user = $_POST['utilisateur'];
        echo $nom;
        echo '<br>';
        echo $prenom;
        echo '<br>';
        echo $date;
        echo '<br>';
        echo $adresse;
        echo '<br>';
        echo $code_postal;
        echo '<br>';
        echo $email;
        echo '<br>';
        echo $user;
        echo '<br>';
        try{
            $response  = $bdd ->query("insert into clients(Nom,Prenom,Utilisateur,DateNaissance,Adresse,CodePostal,Email)
             values('$nom','$prenom','$user','$date','$adresse','$code_postal','$email')");
            echo('Insertion réussite');
        }
        catch(PDOException $e){
            die("Erreur : $sql. " . $e->getMessage());
        }
        $response -> closeCursor();
    ?>
</body>

</html>