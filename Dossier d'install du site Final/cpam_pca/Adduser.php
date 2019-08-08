<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<link rel ="stylesheet" href="http://localhost/cpam_pca/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"  href="Style.css" type="text/css">
</head>



<body>
<div class="container-fluid">
    <div class="txttitre">
        <h1 id="h1"><div class="littlespace">CPAM PCA</div></h1>
        <h3 id="h1" style="margin-left:-50px;">Rejoignez-nous dès maintenant!</h3>
    </div>

    <li id='liens'><a href="http://localhost/cpam_pca/Login.php"> Retour au login ?</a></li>


</div>




<form method="POST" action="http://localhost/cpam_pca/Adduser.php"> 

<div class='txtblock2'>
<br>
<br>
<b>Identifiant ( code agent ) :</b>
<input type="txtbox" name="id_uti">
<br>
<br>
<b>Mot de Passe :</b>
<input type="password" name="pass">
<br>
<br>
<b>Id :</b>
<input type="txtbox" name="idTab">
<br>
<br>
<b>CPAM :</b>
<input type="txtbox" name="cpam">
<br>
<br>
<b>département de la CPAM :</b>
<input type="txtbox" name="idcpam">
</div>
<?php

$id_utilisateur=$_POST['id_uti'];
$mdp_utilisateur=$_POST['pass'];
$admin_or_not=$_POST['idTab'];
$login_utilisateur=$_POST['cpam'];
$id_cpam=$_POST['idcpam'];

?>

<div class='button_center'>
<input type="Submit" value="Créer de contact ?" name ="Creer">






<?php
//partie récupération 



//passage en paramètre a voir plus tard 
//la page show va afficer un contact avec un id en dûr dans un premier temps 



//récup d'un formulaire qui permet de voir si c'est un admin ou user connecté




$user="root";
$pass="";
$dbh = new PDO('mysql:host=localhost;dbname=annuaire', $user, $pass);


if(($_POST['Creer'])){
        
    // set the PDO error mode to exception

    // on utilise  exec() car la variable ne retourne rien 
    $result=$dbh->prepare("INSERT INTO 'gestion_des_comptes' ('id_utilisateur','mdp_utilisateur','admin_or_not','login_utilisateur','id_cpam')
    VALUES (?, ?, ?, ?, ?");
    $result->execute(array($id_utilisateur,$mdp_utilisateur,$admin_or_not,$login_utilisateur,$id_cpam));
    echo "New record created successfully";
    echo"<li><a href='http://localhost/cpam_pca/Login.php'>Cliquez ici pour retourner sur la liste</a></li>";
    // sleep(1);
    // header('Location: http://localhost/cpam_pca/Annuaire.php');    

}

else{
    echo"insertion failed";
}
?>



</div>

</form>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>