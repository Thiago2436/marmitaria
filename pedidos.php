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
    <form> 
        <div> 
        <label for="name">Nome:</label> 
        <input type="text" id="name" name="name" />
        </div> 
        <div> 
        <label for="address">Endereço:</label> 
        <input type="text" id="endereço" name="endereço">
        <div> 
        <label for="phone">Número de telefone:</label> 
        <input type="tel" id="phone" name="phone" /> 
        </div> 
        <div> 
        <label for="items">Itens:</label> 
        <select id="items" name="items[]" multiple> 
        <option value="marmitaP">Marmita P</option> 
        <option value="MarmitaG">Marmita G</option> 
        <option value="salad">Salada</option> 
        </select>
        <label for="quantity">Quantidade:</label> 
        <input type="number" id="quantity" name="quantity" /> 
        <input type="submit" name="btnpedidos" value="Confirmar"><br><br>
        </div> 
    </form>
</body> 
</html>
