<?php 

require '../../vendor/autoload.php';

use Chat\app\ChatServer;

// Servidor primitivo, envia de volta tudo que o cliente manda. 
$app = new Ratchet\App('localhost',9980);
$app->route('/chat', new ChatServer, ['*']);
$app->run();

?>