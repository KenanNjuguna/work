<?php

trait Logger {
    public function log($message) {
        echo "Log: $message";
    }
}


class User {
    use Logger;

    public function createUser($name) {
        $this->log("Creating user: $name");
    }
}


$user = new User();
$user->createUser("Kenan");

?>
