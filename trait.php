<?php
trait Logger {
    public function log(string $msg): void {
        echo "[LOG]: $msg\n";
    }
}

class User {
    use Logger;

    public function create($name) {
        $this->log("$name created.");
    }
}

$u = new User();
$u->create("Eugene"); // Output: [LOG]: Eugene created.


