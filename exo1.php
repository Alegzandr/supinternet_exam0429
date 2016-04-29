<?php

// Starting session
session_start();

// Game initialization
if (empty($_SESSION)) {
    $_SESSION['letters'] = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
        'V', 'W', 'X', 'Y', 'Z'];
    $_SESSION['grid'] = [];
    $_SESSION['points'] = 0;
    $_SESSION['words'] = explode("\n", file_get_contents('exo1/words.txt'));

    for ($i = 0; $i < 16; $i++) {
        shuffle($_SESSION['letters']);
        $_SESSION['grid'][$i] = array_pop($_SESSION['letters']);
    }

    $_SESSION['square1'] = '';
    $_SESSION['square2'] = '';
    $_SESSION['square3'] = '';
    $_SESSION['square4'] = '';

    for ($i = 0; $i < 16; $i++) {
        if ($i < 4) {
            $_SESSION['square1'] .= '<td>' . $_SESSION['grid'][$i] . '</td>';
        } elseif ($i < 8) {
            $_SESSION['square2'] .= '<td>' . $_SESSION['grid'][$i] . '</td>';
        } elseif ($i < 12) {
            $_SESSION['square3'] .= '<td>' . $_SESSION['grid'][$i] . '</td>';
        } else {
            $_SESSION['square4'] .= '<td>' . $_SESSION['grid'][$i] . '</td>';
        }
    }
}

// Rendering the template
$title = 'Boggle';
$body = '
    <h1>Boggle</h1>
    <hr>
    <h3>Voici votre grille :</h3>
    <table class="table-bordered">
        <tr>
            ' . $_SESSION['square1'] . '
        </tr>
        <tr>
            ' . $_SESSION['square2'] . '
        </tr>
        <tr>
            ' . $_SESSION['square3'] . '
        </tr>
        <tr>
            ' . $_SESSION['square4'] . '
        </tr>    
    </table>
    
    <br>
    
    <form name="game" action="/exo1.php" method="post">
        <input type="text" name="word" placeholder="Votre mot" required>
        <input type="submit"><br>
    </form>
    <br>
    <a href="/exo1/retry.php" class="invisible-link"><button>Recommencer</button></a>
';
$js = '<script src="/exo1/js/ajax.js"></script>';

require_once('utils/base.php');
