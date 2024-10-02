<?php

namespace App\Database;

class Connection {
    public function connect() {
        return "Connecting to database";
    }
}


require 'App/Database/Connection.php';

use App\Database\Connection;

$connection = new Connection();
echo $connection->connect(); 
?>
