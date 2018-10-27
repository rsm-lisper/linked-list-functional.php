<?php

namespace llf;

require 'cons.php';
require 'cars.php';


/**
 * Tworzy listę jednokierunkową z użyciem cons().
 *
 * @return callable
 */
function llist () {
    // @todo
}


/**
 * Zwraca element n z listy.
 *
 * @param callable $list Lista (stworzona przez cons() lub llist()).
 * @param int $n Numer elementu który chcemy pobrać (liczone od 0).
 * @return mixed
 */
function nth ($list, $n) {
    if ($n === 0) {
        return first($list);
    }
    return nth(next($list), $n-1);
}
