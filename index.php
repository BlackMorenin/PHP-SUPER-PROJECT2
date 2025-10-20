<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <title>Página Inicial</title>
   <style>
    body {
         background-color: var(--bg-primary);
         color: var(--text-primary);
         min-height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
         padding: 20px;
         background-image: linear-gradient(to bottom right, #0c0c0c, #1a1a2e);
      }
      h2 {
         color: green;
      }
    </style>  
</head>
<body>
   <h2>Projeto2</h2>
   <form method="POST" action="login.php">
       Usuário: <input type="text" name="usuario"><br><br>
       Senha: <input type="password" name="senha"><br><br>
   <input type="submit" value="Entrar">
   <select name="tema">
<option value="claro">Claro</option>
<option value="escuro">Escuro</option>
</select><br>
</form>
</body>
</html>
