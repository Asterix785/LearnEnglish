<html>
<head>
<title>Learn English : Halloween - Exo1</title>
<link rel="icon" type="image/png" href="../../img/learn-english.png" />
</head>
<body>
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  ev.target.value = ev.dataTransfer.getData("text");
}

</script>
<style>
	#div1 {
	width: 200px;
	height: 50px;
	padding: 10px;
	border: 1px solid #aaaaaa;
	}
	#div2 {
	width: 200px;
	height: 50px;
	padding: 10px;
	border: 1px solid #aaaaaa;
	}
	#div3 {
	width: 200px;
	height: 50px;
	padding: 10px;
	border: 1px solid #aaaaaa;
	}
</style>
<center><br>
	<h1>Bienvenue sur l'exercice 1</h1><br><br>
	<h3>Règles : On voit un ensemble d'images et un ensemble de mots dans le désordre. L'enfant doit déplacer les mots vers les images correspondantes.</h3>
	<br>
	<form action="exo.php" method="post">
	<table>
		<tr width=500 height=500>
			<td>
			<img width=400 height=400 src="sorciere.png">
			<p></p>
			<center><input id="div1" name="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></input></center>
			</td>
			<td>
			<img width=400 height=400 src="vampire.png">
			<p></p>
			<center><input id="div2" name="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></input></center>
			</td>
			<td>
			<img width=400 height=400 src="clown.png">
			<p></p>
			<center><input id="div3" name="div3" ondrop="drop(event)" ondragover="allowDrop(event)"></input></center>
			</td>
		</tr>
	</table>
	<br><br><br><table width=300 height=10>
		<tr>
			<td>
			<center><h2 id="Witch" name="drag1" draggable="true" ondragstart="drag(event)">Witch</h2></center>
			</td>
			<td>
			<center><h2 id="Clown" name="drag2" draggable="true" ondragstart="drag(event)">Clown</h2></center>
			</td>
			<td>
			<center><h2 id="Vampire" name="drag3" draggable="true" ondragstart="drag(event)">Vampire</h2></center>
			</td>
		</tr>
	</table>
	<button style="height:50px; width:170px" type="submit">VALIDER</button>
	</form>
</center>
</body>
</html>

<?php
//var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if ($_POST["div1"] == "Witch" && $_POST["div2"] == "Vampire" && $_POST["div3"] == "Clown")
	{
		echo "<script>alert(\"Successful !\")</script>";
	}
	else
	{
		echo "<script>alert(\"Lost!  Try again :)  !\")</script>";
	}
}

?>