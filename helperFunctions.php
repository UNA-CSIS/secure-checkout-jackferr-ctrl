<?php

function validateCard($number, &$cardType) {
    $length = strlen($number);
    if ($length === 16 && in_array(substr($number, 0, 2), ['51', '52', '53', '54', '55'])) {
        $cardType = 'MASTERCARD';
        return True;
    } elseif (($length === 13 || $length === 16) && substr($number, 0, 1) === '4') {
        $cardType = 'VISA';
        return True;
    } elseif ($length === 15 && in_array(substr($number, 0, 2), ['34', ['37']])) {
        return True;
    }
    return False;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>