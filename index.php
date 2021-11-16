<?php

$hello_msg = getenv("HELLO_MSG") ?: "world";

echo "Hello " . $hello_msg . "!";

?>
