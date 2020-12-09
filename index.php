<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = 'José';
$idade = 34;

if ($idade >= 6 && $idade <= 12) {
	echo 'infantil';
} else if ($idade >= 13 && $idade <= 18) {
	echo 'adolescente';
} else {
	echo 'adulto';
}