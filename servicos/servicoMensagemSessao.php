<?php
session_start();

function setarMensagemErro(string $mensagem) : void {
  $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string {
  if (isset($_SESSION['mensagem-de-erro'])) {
    return $_SESSION['mensagem-de-erro'];
  }
}