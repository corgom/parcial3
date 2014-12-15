<?php

session_start();

// remover todas las variables de sesion
session_unset(); 

// destruir la sesion
session_destroy();

echo "<p>" . $_SESSION['contador'] . "</p>";

?>

<p>
	<a href="sesion_usar.php">Ir nuevamente a usar sesion</a>
</p>
<p>
	<a href="../.">Regresar inicio</a>
</p>