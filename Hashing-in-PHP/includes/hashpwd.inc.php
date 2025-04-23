<?php

/* General Hasing */

$sensitiveData = "Checking";
$salt = bin2hex(random_bytes(16)); //Generating random salt

$pepper = "ASerectPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha26", $dataToHash);


/*  Hashing Password */

$pwdSignup = "Password";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Password";

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are Same";
} else {
    echo "They are not same";
}
