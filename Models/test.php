<?php
validateFor([
    'username' => $_POST["username"]
]);

function validateFor(array $data){

    foreach ($data as $item){
        $this->validateString($item["firstname"], "Enter username");
    }
}

private function validateString(string $string, string $error){
    preg_match('/^[a-zA-Z0-9]{6,12}$/', $string);
    $this->error["firstname"] = $error;
}