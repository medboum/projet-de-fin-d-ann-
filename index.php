<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<nav>
	  <ul>
		<li><a href="index.php">Login</a></li>
		<li><a href="Inscriptionn.php">Inscription</a></li>
        <li><a href="HTML 5-1.html">accueille</a></li>
         
		<?php
		if(isset($_SESSION['nom']))
		{
			echo '<li><a href="logout.php">Déconnexion</a></li>';
		}
		?>
	</ul>
	</nav>
</header>
<section>
 <h1 class="titre">Bienvenue dans notre forum : Login</h1> 
</section>
<section>

<form action="" method="post" id="flogin">
<input type="text" name="email" placeholder="Votre Email" class="ch"><br>
<input type="password" name="pw" placeholder="mot de passe" class="ch"><br>
<input type="submit" name="valider" value="Valider" class="ch">

<?php
$conn = mysqli_connect("localhost","root","hxty10841","portrait");
if(isset($_POST['valider']))
{
	$email=$_POST['email'];
	$mp=$_POST['pw'];
$res=mysqli_query($conn,"select * from portrait where email='$email' and password='$mp'");
$nbr=mysqli_num_rows($res);
if($nbr==0)
echo '<br><br>login ou mot de passe incorrects ';
else
{
    $data=mysqli_fetch_assoc($res);
    $_SESSION['id_user']=$data['id_user'];
    $_SESSION['nom']=$data['nom'];
    $_SESSION['prenom']=$data['prenom'];
    $_SESSION['login']=$data['email'];
    $_SESSION['mp']=$data['password'];
    echo '<script>window.location="forum.php"</script>';
} }
?>

</form>
</section>
</body>
</html>
