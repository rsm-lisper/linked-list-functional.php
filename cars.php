<?php

namespace plis;

function car ($cons) { return first ($cons); }
function cdr ($cons) { return next ($cons); }
function caar ($cons) { return car (car ($cons)); }
function cadr ($cons) { return car (cdr ($cons)); }
function cdar ($cons) { return cdr (car ($cons)); }
function cddr ($cons) { return cdr (cdr ($cons)); }
function caaar ($cons) { return car (car (car ($cons))); }
function caadr ($cons) { return car (car (cdr ($cons))); }
function cadar ($cons) { return car (cdr (car ($cons))); }
function caddr ($cons) { return car (cdr (cdr ($cons))); }
function cdaar ($cons) { return cdr (car (car ($cons))); }
function cdadr ($cons) { return cdr (car (cdr ($cons))); }
function cddar ($cons) { return cdr (cdr (car ($cons))); }
function cdddr ($cons) { return cdr (cdr (cdr ($cons))); }
function caaaar ($cons) { return car (car (car (car ($cons)))); }
function caaadr ($cons) { return car (car (car (cdr ($cons)))); }
function caadar ($cons) { return car (car (cdr (car ($cons)))); }
function caaddr ($cons) { return car (car (cdr (cdr ($cons)))); }
function cadaar ($cons) { return car (cdr (car (car ($cons)))); }
function cadadr ($cons) { return car (cdr (car (cdr ($cons)))); }
function caddar ($cons) { return car (cdr (cdr (car ($cons)))); }
function cadddr ($cons) { return car (cdr (cdr (cdr ($cons)))); }
function cdaaar ($cons) { return cdr (car (car (car ($cons)))); }
function cdaadr ($cons) { return cdr (car (car (cdr ($cons)))); }
function cdadar ($cons) { return cdr (car (cdr (car ($cons)))); }
function cdaddr ($cons) { return cdr (car (cdr (cdr ($cons)))); }
function cddaar ($cons) { return cdr (cdr (car (car ($cons)))); }
function cddadr ($cons) { return cdr (cdr (car (cdr ($cons)))); }
function cdddar ($cons) { return cdr (cdr (cdr (car ($cons)))); }
function cddddr ($cons) { return cdr (cdr (cdr (cdr ($cons)))); }
