<?php

namespace plis;


/**
 * Tworzy podstawową konstrukcję, tzw cons-cell - komórkę o 2 polach.
 *
 * @param mixed $first Zawartość pierwszego pola.
 * @param mixed $next Zawartość drugiego pola.
 * @return callable
 */
function cons ($first, $next) {
    return function ($pos) {
        if ($pos === 0) { return $first; }
        return $next;
    };
}


/**
 * Zwraca zawartość pierwszego pola komórki.
 *
 * @param callable $cons Komórka stworzona przez cons().
 * @return mixed
 */
function first ($cons) {
    return $cons (0);
}


/**
 * Zwraca zawartość drugiego pola komórki.
 *
 * @param callable $cons Komórka stworzona przez cons().
 * @return mixed
 */
function next ($cons) {
    return $cons (1);
}
