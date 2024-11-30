<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Aluno</title>
    <link href="/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">

        <h1 class="form-contact-title">📚 Cadastro de Aluno 📚</h1>
        <form method="POST" action="adicionar.php">
            <input type="text" class="form-contact-input" name="nome" placeholder="Nome" required />
            <input type="email" class="form-contact-input" name="email" placeholder="Email" required />
            <input type="tel" class="form-contact-input" name="telefone" placeholder="(XX) XXXX-XXXX" required />
            <button type="submit" class="form-contact-button">Cadastrar</button>
        </form>
    </div>
    <?php include('listar.php'); ?>
</body>
</html>





