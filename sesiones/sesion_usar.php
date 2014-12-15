<?php

session_start();

if (!isset($_SESSION['contador'])) {
  $_SESSION['contador'] = 100;
} else {
  $_SESSION['contador']++;
}

echo "<p>" . $_SESSION['contador'] . "</p>";

?>

<p>
	<a href="sesion_eliminar.php">Eliminar sesion</a>
</p>
<p>
	<a href="../.">Regresar inicio</a>
</p>