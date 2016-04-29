<?php
header('Content-Type: application/json');

session_start();

$word = htmlentities(trim(strtolower($_POST['word'])));
$response = [];
$valid = false;
$lettersOK = false;

// Missing contiguous letters yet
if (isset($word) && !empty($word)) {
    $word_array = str_split($word, 1);
    foreach ($word_array as $key) {
        if (!in_array(strtoupper($key), $_SESSION['grid'])) {
            $response['error'] = '<span class="error">' . strtoupper($key) . ' n\'est pas dans le tableau. </span>';
        } else {
            $lettersOK = true;
        }
    }

    if ($lettersOK) {
        if (in_array($word, $_SESSION['words'])) {
            $pos = array_search($word, $_SESSION['words']);
            unset($_SESSION['words'][$pos]);
            $response['win'] = '<span>Gagné !</span>';
        } else {
            $response['error'] = '<span class="error">Le mot est incorrect.</span>';
        }
    }

    $valid = true;
}

if (!$valid) {
    $response['error'] = '<span class="error">Vous n\'avez rien saisi.</span>';
}

echo(json_encode($response));