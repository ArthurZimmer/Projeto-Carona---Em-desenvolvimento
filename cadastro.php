<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <center><h2>Cadastro</h2></center>
            <form id="Primerio-cadastro" action="registrar.php" method="post">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="input-group">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" id="sobrenome" name="sobrenome" required>
                </div>
                <div class="input-group">
                    <label for="cpf">CPF</label>
                    <input type="number" id="cpf" name="cpf" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="matricula">Matrícula Aluno</label>
                    <input type="text" id="matricula" name="matricula" required>
                </div>
                <div class="input-group">
                    <label for="carona">Receber Carona/Dar carona</label>
                    <select id="carona" name="carona" required>
                        <option value="receber">Receber Carona</option>
                        <option value="dar">Dar Carona</option>
                    </select>
                </div>
                <div class="input-group password-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                    <span class="toggle-password">👁️</span>
                </div>
                <div class="input-group password-group">
                    <label for="confirm-password">Repetir Senha</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                    <span class="toggle-password">👁️</span>
                </div>
                <button type="submit">Continuar</button>
            </form>
            <p>Já tem conta? <a href="login.php">Fazer Login</a></p>
            <p><a href="index.php">Voltar à página inicial</a></p>

        </div>
        <div class="right-section">
            <div class="icon">
                <img src="img/logo-projeto-2 (1) (1).png">
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.toggle-password').forEach(item => {
            item.addEventListener('click', function () {
                const passwordField = this.previousElementSibling;
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                this.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
            });
        });
    </script>
</body>
</html>