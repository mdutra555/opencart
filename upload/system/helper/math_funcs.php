<?php
function mdiHash($data) {
    //** Add your own options here
    $options = [
        'cost' => 10,
        'salt' => mcrypt_create_iv(14, MCRYPT_DEV_URANDOM),
    ];
    return password_hash($data, PASSWORD_BCRYPT, $options);
}
