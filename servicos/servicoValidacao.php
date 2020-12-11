<?php

function validaNome(string $nome) : bool {
  if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio, preencha-o novamente";
    return false;
  }

  if (strlen($nome < 3)) {
    $_SESSION['mensagem-de-erro'] = "O nome deve conter mais de 3 caracteres, preencha-o novamente";
    return false;
  }

  if (strlen($nome) > 40) {
    $_SESSION['mensagem-de-erro'] = "O nome é muito extenso, preencha-o novamente";
    return false;
  }

  return true;
}

function validaIdade(string $idade) : bool {
  if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = "Informe um número para a idade, preencha-o novamente";
    return false;
  }

  return true;
}