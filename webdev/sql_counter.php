<!DOCTYPE HTML>
<html>
	<head>
		<title>Visits</title>
	</head>
	<body>
	<?php
		$db = new SQLite3("../res/counter.db");
		$db->exec('CREATE TABLE table (id INTEGER, dat TEXT);');

$stmt = $db->prepare('SELECT name FROM people ORDER BY name;');
$result = $stmt->execute();

while ($row = $result->fetchArray())
{
    echo $row['name'] . PHP_EOL;
}
	?>
	</body>
</html>