<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function offer(){
		var value = document.getElementById("casella").value;
		window.open('quadro.php?quadro=' +
				'<?php echo $_GET["quadro"] ?>' +
				'&offer=' + value,'_self');
	}
</script>
<?php
	if(!isset($_GET["quadro"]))
		echo "<title>Error</title></head><body>Link expired";
	else{
		$quadro = $_GET["quadro"];
		$quadri = array('clown' => 'Clown',
		 			'gucciboy' => 'Gucci boy',
		 			'queenelizabeth' => 'Queen Elizabeth',
		 			'sandwich' => 'sandwich',
		 			'shrek' => 'Shrek',
		 			'thebeauty' => 'The beauty');
		echo "<!DOCTYPE html><html><head><title>"
			. $quadro . "</title></head><body><h1>"
			. $quadri[$quadro] . '</h1><img src="'
			. $quadro . '.jpg"/><br>';
		if(isset($_GET["offer"])){
			echo "La tua offerta: " . $_GET["offer"]
			. "€<br>";
		}else{
			echo "Non hai ancora fatto un'offerta<br>";
		}
		echo "Fai un'offerta <input type="
			. '"number" id="casella" onFocusOut="offer()"/>';
	}
?>
<br>
<input type="button" onclick="window.open('index.php', '_self')" value="Torna alla home"/>
</body>
</html>