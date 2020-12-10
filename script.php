<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// Validação do campo nome
if (empty($nome)) {
	$_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio";
	return;
}

if (strlen($nome < 3)) {
	$_SESSION['mensagem-de-erro'] = "O nome deve conter mais de 3 caracteres";
	return;
}

if (strlen($nome) > 40) {
	$_SESSION['mensagem-de-erro'] = "O nome é muito extenso";
	return;
}

// Validação do campo idade
if (!is_numeric($idade)) {
	$_SESSION['mensagem-de-erro'] = "Informe um número para a idade";
	return;
}

if ($idade >= 6 && $idade <= 12) {
	for ($i = 0; $i <= count($categorias); $i++) {
		if ($categorias[$i] == 'infantil')
			echo "O nadador ".$nome." compete na categoria Infantil";
	}
} else if ($idade >= 13 && $idade <= 18) {
	for ($i = 0; $i <= count($categorias); $i++) {
		if ($categorias[$i] == 'adolescente')
			echo "O nadador ".$nome." compete na categoria Adolescente";
	}
} else {
	for ($i = 0; $i <= count($categorias); $i++) {
		if ($categorias[$i] == 'adulto')
			echo "O nadador ".$nome." compete na categoria Adulto";
	}
}