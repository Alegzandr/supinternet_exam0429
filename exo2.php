<?php

require_once('exo2/Nim.php');

$title = 'Jeu de Nim';

$body = '
    <h3>Une checkbox = une allumette</h3>

    <form name="game" action="#" method="post">
        <input type="checkbox" name="match1">
        <input type="checkbox" name="match2">
        <input type="checkbox" name="match3">
        <input type="checkbox" name="match4" disabled>
        <input type="checkbox" name="match5" disabled>
        <input type="checkbox" name="match6" disabled>
        <input type="checkbox" name="match7" disabled>
        <input type="checkbox" name="match8" disabled>
        <input type="checkbox" name="match9" disabled>
        <input type="checkbox" name="match10" disabled>
        <input type="checkbox" name="match11" disabled>
        <input type="checkbox" name="match12" disabled>
        <input type="checkbox" name="match13" disabled>
        <br>
        
        <br>
        <input type="submit">
    </form>
';

$js = '<script src="/exo2/js/game.js"></script>';

require_once('utils/base.php');