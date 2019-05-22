<?php 

require_once('config.php');

echo session_save_path();

// 0 = PHP_SESSION_DISABLED
// 1 = PHP_SESSION_NONE
// 2 = PHP_SESSION_ACTIVE
var_dump(session_status());

switch(session_status()) {
	case PHP_SESSION_DISABLED:
		echo "<p>As sessões estão desabilitadas.</p>";
		break;
	case PHP_SESSION_NONE:
		echo "<p>Está habilitada, mas não há sessões ativas</p>";
		break;
	case PHP_SESSION_ACTIVE:
		echo "<p>Existe uma sessão</p>";
		break;
}

 ?>