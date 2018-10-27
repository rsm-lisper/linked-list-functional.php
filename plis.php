<?php

namespace plis;

require 'cons.php';
require 'cars.php';


/**
 * Tworzy listę jednokierunkową z użyciem cons().
 *
 * @param mixed ...$elems Elementy listy.
 * @return callable
 */
function llist (...$elems) {
    if (empty ($elems)) { return NULL; }
    return cons (array_shift ($elems), $elems);
}


/**
 * Sprawdza czy podany argument to NULL.
 *
 * @param mixed $arg Argument do sprawdzenia.
 * @return bool
 */
function nullp ($arg) {
    return $arg === NULL;
}


function eq ($a, $b) {
    return $a === $b;
}


function equalp ($a, $b) {
    return $a == $b;
}


/**
 * Zwraca element n z listy.
 *
 * @param callable $list Lista (stworzona przez cons() lub llist()).
 * @param int $n Numer elementu który chcemy pobrać (liczone od 0).
 * @return mixed
 */
function nth ($list, $n) {
    if (nullp ($list)) { return null; }
    if ($n === 0) { return first($list); }
    return nth (next ($list), $n-1);
}


function assoc ($list, $search, $not_found=null, $testp=equalp) {
    if (nullp ($list)) { return $not_found; }
    $elem = first ($list);
    if (testp (first ($elem), $search)) { return $elem; }
    return assoc (next ($list), $search, $not_found, $testp);
}
