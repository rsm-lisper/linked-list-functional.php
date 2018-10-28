<?php

namespace plis;


/**
 * Tworzy podstawową konstrukcję, tzw cons-cell - komórkę o 2 polach.
 *
 * @param mixed $first Zawartość pierwszego pola.
 * @param mixed $next Zawartość drugiego pola.
 * @return callable
 */
function cons ($first, $next) { return
        function ($return_first) { return
            $return_first ? $first :
            $next ;};}


/**
 * Zwraca zawartość pierwszego pola komórki.
 *
 * @param callable $cons Komórka stworzona przez cons().
 * @return mixed
 */
function first ($cons) { return
        $cons (true) ;}


/**
 * Zwraca zawartość drugiego pola komórki.
 *
 * @param callable $cons Komórka stworzona przez cons().
 * @return mixed
 */
function next ($cons) { return
        $cons (false) ;}
