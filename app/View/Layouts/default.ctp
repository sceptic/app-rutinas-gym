<?php echo $this->fetch('content'); ?>
<?php

if (array_key_exists('SERVER_ADDR', $_SERVER)){
	if($_SERVER['SERVER_ADDR'] =='127.0.0.1'){
		//echo $this->element('sql_dump');
	}
}

?>
</body>
</html>
