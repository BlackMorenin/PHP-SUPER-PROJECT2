<?php
session_start();
$tema = $_SESSION['tema'] ?? 'claro';
if ($tema === 'escuro') {
echo "<body style='background-color: #222; color: #eee'>";
} else {
echo "<body style='background-color: #fff; color: #000'>";
}
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';
if ($usuario === 'admin' && $senha === '123') {
   $_SESSION['usuario'] = $usuario;
   $_SESSION['tema'] = $_POST['tema'];
   echo "Login bem-sucedido! <a href='produtos.php'>Ir para produtos</a>";
} else {
   echo "Usuário ou senha incorretos. <a href='index.php'>Tentar novamente</a>";
}
?>
