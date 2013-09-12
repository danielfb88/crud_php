<?php 
require('model/Conexao.php');

if(Conexao::getInstance() != null)
	echo 'ok';
else
	echo 'not ok';

?>
