<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Produto</title>
</head>
<body>
  <form action="cadastro_produto.php" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao"></textarea>
    <label for="preco">Preço</label>
    <input type="number" name="preco" id="preco">
    <input type="submit" value="Cadastrar">
  </form>
  <?php
// Get the product ID from the URL.
$id = $_GET["id"];

// Connect to the database.
$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Delete the product from the database.
$sql = "DELETE FROM products WHERE id = $id";
$conn->query($sql);

// Close the connection.
$conn->close();

// Redirect the user to the products page.
header("Location: produtos.php");
exit();
?>
<?php
// Get the product ID from the URL.
$id = $_GET["id"];

// Connect to the database.
$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the product from the database.
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
  die("Product not found.");
}
$row = $result->fetch_assoc();

// Update the product.
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$sql = "UPDATE products SET nome = '$nome', descricao = '$descricao', preco = $preco WHERE id = $id";
$conn->query($sql);

// Close the connection.
$conn->close();

// Redirect the user to the products page.
header("Location: produtos.php");
exit();
?>

</body>
</html>