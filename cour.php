
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTf-8">
    <title>portrait communitaire ensias </title>
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="all.min.css">
   
</head>
<body>
   
<div class="container">
    <img src="ensais.jpg" >
</div>
<div class="menu-bar">
<ul>
<li><i class="fas fa-home"></i><a class="active" href="">ACCUEIL</a></li>
<li><a  href="" ><i class="fas fa-newspaper"></i> ACTUALITÉS </a></li>
<li><a  href="#" ><i class="fas fa-cube"></i> A PROPOS DE ENSIAS </a>
<div class="sub-menu">
<ul>
       <li><a href="" >le mot de directeur </a></li>
       <li><a href="" > hoistoire  de ecole  </a></li>
       <li class=""> chiffre clés</a></li>
</ul>
</div>
</li>
<li ><a  href="" ><i class="fas fa-book"></i> FORMATION </a>
<div class="sub-menu">
    <ul>
       <li><a href="" >formation d'ingenieur </a></li>
       <li><a href="" > activité pedagogique </a></li>
       <li class="hover-me"><a href=""> resource pedarogique </a>
       
       </li>
</li>
</ul>
</div>
<li><a  href="" ><i class="fas fa-male"></i> VIS ESTUDIANTINE </a>
<div class="sub-menu">
<ul>
<li><a href="plannngin.php" >planning</a></li>
<li><a href="" >Emploi du temps </a>
<div class="sub-menu">
<ul>
<li><a href="" >G2 </a></li>
<li><a href="" >G4 </a></li>

</ul>
</div>
</li>

</ul>
</div>
</li>

<li><a  href="" > <i class="fas fa-user-circle" >  Profil</i> </a>
<div class="sub-menu">
<FORM method=post action="">
<h2 style:color:><i class="fas fa-user-graduate"></i>Etudient</h2>
<p style="color:#ffffff";>

<?php

$conn= mysqli_connect("localhost","root","hxty10841","portrait");

echo 'Nom:'.$_SESSION['nom'];
echo '<br>';
echo  '<br>';
echo 'Prenom:'.$_SESSION['prenom'];
echo  '<br>';
echo  '<br>';
echo 'Sex:'.$_SESSION['sex'];
echo  '<br>';
echo  '<br>';
echo 'Email:'.$_SESSION['login'];
echo  '<br>';
echo  '<br>';
echo 'Adress:'.$_SESSION['adress'];
echo  '<br>';
echo  '<br>';
echo 'Pays:'.$_SESSION['pays'];
echo  '<br>';
echo  '<br>';
echo'Telephone:'.$_SESSION['telephone'];
echo  '<br>';
echo  '<br>';

?>
</p>
<p><br/></p>
<INPUT type=submit name="Déconnexion" VALUE="Déconnexion">
<?php
if(isset($_POST['Déconnexion'])){

echo '<script>window.location="portrait.php"</script>';
}
?>
</li>
</div>
</div>
    <p> </p>
<div class="menu-bar">
    <h1 align="center">Ressources pedagogiques</h1>
</div>
<p><br/></p>

<div class="fichier">
<iframe src="fichier/Cours Réseaux Locaux 2018.pdf" width="500" height="350" >voici un  </iframe>
<iframe src="fichier/Systèmes d’exploitation (224 pages).pdf" width="500" height="350" >voici un  </iframe>
<iframe src="fichier/trspeltsro07ch5.pdf" width="300" height="350" >voici un
</iframe>
</div>
<p><br/></p>

<form enctype="multipart/form-data" action="upload.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
Selectionner le fichier a importer:
<input name="uploadedfile" type="file" /><br />
<input type="submit" value="Importer" />
</form>
<?php
$target_path = "Archive/";
 
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
?>

    
</body>
</html>








     
        
