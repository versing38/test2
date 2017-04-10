<?php
	session_start();
	session_unset();
	session_destroy();
?>
<script type="text/javascript">
	document.location.replace('/');			
</script>