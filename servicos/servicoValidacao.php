<?php
// decalre['strict type=1']; // permite forçar a tipagem das funções e variáveis
function validaNome(string $nome) : bool {
  // Validação do campo nome
if (empty($nome)) {
	$_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio, preencha-o novamente";
	header("location: index.php");
	return false;
}

if (strlen($nome < 3)) {
	$_SESSION['mensagem-de-erro'] = "O nome deve conter mais de 3 caracteres, preencha-o novamente";
	header("location: index.php");
	return false;
}

if (strlen($nome) > 40) {
	$_SESSION['mensagem-de-erro'] = "O nome é muito extenso, preencha-o novamente";
	header("location: index.php");
	return false;
}

  return true;
}

function validaIdade(string $idade) : bool {
  if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = "Informe um número para a idade, preencha-o novamente";
    header("location: index.php");
    return false;
  }

  return true;
}