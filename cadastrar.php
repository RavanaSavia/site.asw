<?php include_once 'includes/header.php';?>

<main>
    <form action="controllers/con_usuario.php?funcao=cadastrar" method="post">
        <input type="text" name="nome" placeholder="nome" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="senha" placeholder="senha" required>
        <input type="submit" value="Entrar">
    </form>
</main>
<?php include_once 'includes/footer.php';?>