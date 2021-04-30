<html>
    <head>
        <title>Learn English : Administration</title>
		<link rel="icon" type="image/png" href="../img/learn-english.png" />
    </head>
    <body>
<?php
 if(isset($_POST['loginform']) && isset($_POST['passform']) && $_POST['loginform']=='admin' or 'virginie' && $_POST['passform']=='mdp') {
?>
<h1> Bienvenue sur la page d'administration<h1>

<h2> Vous retrouvez ci-dessous tous les cours: </h2>

<form action="admin.php" method="post" class="tabcenter">
	<table align="left">
   <tr>
      <th align="left">Thème Halloween</th>
   </tr><tr>
      <td align="center" height="45px">Exercice 1</td>
      <td> <button><a href="exo1_h.zip">Exporter</a></button>
      </td>
   </tr><tr>
      <td align="center" height="45px">Exercice 2</td>
      <td> <button><a href="exo2_h.zip">Exporter</a></button>
      </td>
   </tr><tr>
      <td align="center" height="45px">Exercice 3</td>
      <td> <button><a href="exo3_h.zip">Exporter</a></button>
      </td>
  	</tr>
  	<tr>
      <th align="left">Thème Noël</th>
   </tr><tr>
   	<td align="center" height="45px">Exercice 1</td>
      <td> <button><a href="exo1_n.zip">Exporter</a></button>
      </td>
   </tr><tr>
      <td align="center" height="45px">Exercice 2</td>
      <td> <button><a href="exo2_n.zip">Exporter</a></button>
      </td>
   </tr><tr>
      <td align="center" height="45px">Exercice 3</td>
      <td> <button><a href="exo3_n.zip">Exporter</a></button>
      </td>
  	</tr>
	</table>
</form>

<?php  
}
   else
    {
        echo '<p>Mot de passe incorrect</p>';
		echo '<a href="../login/login.php">Revenir à la page authentification</a';
    }
 ?>
</body>
</html>