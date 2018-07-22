<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	input{
		width: 100px;
	}
	td{
		border-left: 2px solid black;
	}
	table{
		border: 2px solid black;
	}
</style>
	<title>Asta</title>
</head>
<body>
	<h1>sono disponibili i seguenti quadri:</h1>
	<form method="get" action="quadro.php">
		<table>
			<tr>
				<td style="border: 0;">
				<input type="image" name="quadro" src="clown.jpg" value="clown"/>
				</td>
				<td>
				<input type="image" name="quadro" src="gucciboy.jpg" value="gucciboy"/>
				</td>
				<td>
				<input type="image" name="quadro" src="queenelizabeth.jpg" value="queenelizabeth"/>
				</td>
				<td>
				<input type="image" name="quadro" src="sandwich.jpg" value="sandwich"/>
				</td>
				<td>
				<input type="image" name="quadro" src="shrek.jpg" value="shrek"/>
				</td>
				<td>
				<input type="image" name="quadro" src="thebeauty.jpg" value="thebeauty"/>
				</td>
			</tr>
			<tr>
				<td style="border: 0;">Clown</td>
				<td>Gucci boy</td>
				<td>Queen Elizabeth</td>
				<td>Sandwich</td>
				<td>Shrek</td>
				<td>The beauty</td>
			</tr>
		</table>
		<h3>Clicca sul quadro per andare all'asta</h3>
	</form>
</body>
</html>