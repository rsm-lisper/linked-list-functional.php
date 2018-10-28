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
function llist (...$elems) { return
        empty ($elems) ? null :
                cons (array_shift ($elems), llist ($elems)) ;}


/**
 * Sprawdza czy podany argument to NULL.
 *
 * @param mixed $arg Argument do sprawdzenia.
 * @return bool
 */
function nullp ($arg) { return
        $arg === null ;}


function eq ($a, $b) { return
        $a === $b ;}


function equalp ($a, $b) { return
        $a == $b ;}


/**
 * Zwraca element n z listy.
 *
 * @param callable $list Lista (stworzona przez cons() lub llist()).
 * @param int $n Numer elementu który chcemy pobrać (liczone od 0).
 * @return mixed
 */
function nth ($list, $n) { return
        nullp ($list) ? null :
        ($n === 0 ? first ($list) :
         nth (next ($list), $n-1)) ;}


function assoc ($list, $search, $not_found=null, $testp=equalp) { return
        nullp ($list) ? $not_found :
        ($testp (caar ($elem), $search) ? $elem :
         assoc (next ($list), $search, $not_found, $testp)) ;}
