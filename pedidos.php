<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="pedidos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamitaria</title>
</head>
<body>
<body> 
<form method="POST" action="">
        <div> 
        <label for="name"><h2>Nome:</h2></label> 
        <input type="text" id="name" name="name" />
        </div> 
        <div> 
        <label for="address"><h2>Endereço:</h2></label> 
        <input type="text" id="endereço" name="endereço">
        <div> 
        <label for="phone"><h3>Número de telefone:</h3></label> 
        <input type="tel" id="phone" name="phone" /> 
        </div> 
        <div> 
        <label for="items"><h2>Itens:</h2></label> 
        <select id="items" name="items[]" multiple> 
        <option value="marmitaP"><h3>Marmita P</h3></option> 
        <option value="MarmitaG"><h3>Marmita G</h3></option> 
        <option value="salad"><h3>Refri</h3></option> 
        </select>
        <label for="quantity"><h3>Quantidade:<h3></label> 
        <input type="number" id="quantity" name="quantity" /> 
        <input type="submit" name="btnpedidos" value="Confirmar"><br><br>
        </div> 
    </form>
<?php
    // inclua o arquivo de conexão com o banco de dados
    include 'conex.php';

// verifique se o formulário foi enviado
    if (isset($_POST['btnpedidos'])) {

  // obtenha os valores enviados pelo formulário
    $name = $_POST['name'];
    $address = $_POST['endereço'];
    $phone = $_POST['phone'];
    $items = implode(', ', $_POST['items']);
    $quantity = $_POST['quantity'];
    

  // crie a instrução SQL para inserir os dados na tabela
    $sql = "INSERT INTO Pedidos (nome, endereço, telefone, item, quantidade,)
          VALUES ('$name', '$address', '$phone', '$items', '$quantity')";

  // execute a instrução SQL
    if ($conn->query($sql) === TRUE) {
    echo "Pedido cadastrado com sucesso!";
    } else {
    echo "Erro ao cadastrar o pedido: " . $conn->error;
    }

  // feche a conexão com o banco de dados
    $conn->close();
}
?>

</body> 
</html>
