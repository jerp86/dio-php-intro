<?php

function validaNome(string $nome) : bool {
  if (empty($nome)) {
    setarMensagemErro("O nome não pode ser vazio, preencha-o novamente");
    return false;
  }

  if (strlen($nome < 3)) {
    setarMensagemErro("O nome deve conter mais de 3 caracteres, preencha-o novamente");
    return false;
  }

  if (strlen($nome) > 40) {
    setarMensagemErro("O nome é muito extenso, preencha-o novamente");
    return false;
  }

  return true;
}

function validaIdade(string $idade) : bool {
  if (!is_numeric($idade)) {
    setarMensagemErro("Informe um número para a idade, preencha-o novamente");
    return false;
  }

  return true;
}