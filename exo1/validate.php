<?php
header('Content-Type: application/json');

session_start();

$word = htmlentities(trim(strtoupper($_POST['word'])));
$response = [];
$valid = false;

// Validations not finished
if (isset($word) && !empty($word)) {
    if (in_array($word, $_SESSION['words'])) {
        $pos = array_search($word, $_SESSION['words']);
        unset($_SESSION['words'][$pos]);
        $response['win'] = '<span>Gagné !</span>';
    } else {
        $response['error'] = '<span class="error">Le mot n\'est pas valide.</span>';
    }
    $valid = true;
}

if (!$valid) {
    $response['error'] = '<span class="error">Vous n\'avez rien saisi.</span>';
}

return json_encode($response);