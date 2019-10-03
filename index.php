<?php
require 'vendor/autoload.php';
use profanityblocker\profanityblocker\ProfanityService;
?>
<html>
	<head>
		<title>Profanity Blocker PHP Sample App</title>
	</head>
	<body>
		<h1>Profanity Blocker PHP Sample App</h1>
		<form method="post">
			Word: <input name="Word" type="text" /><input type="submit" value="Submit" />
		</form>
		<?php
			if(isset ($_POST["Word"]) && !empty ($_POST["Word"])) {
				$Key = "";
				$Word = $_POST["Word"];
				$s = new ProfanityService($Key, true, true, true);
				echo "Originial Word: $Word<br><br>";
				try {
 					echo "Parsed Word: " . $s->ParseText($Word);
				}
				catch (exception $e) {
				    echo "Server Response: " . $e->getMessage();
				}
			}
		?>
	</body>
</html>
