<?php

session_start();

$_SESSION['contador'] = 100;

echo "<p>" . $_SESSION['contador'] . "</p>";
?>

<p>
	<a href="sesion_usar.php">Usar sesion</a>
</p>
<p>
	<a href="../.">Regresar inicio</a>
</p>