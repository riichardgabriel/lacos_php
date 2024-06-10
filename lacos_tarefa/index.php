<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veículos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Lista de Veículos</h2>

<table>
    <tr>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Placa</th>
        <th>Ano</th>
        <th>Marca</th>
        <th>Portas</th>
        <th>Tipo</th>
    </tr>

    <?php $veiculos = array(
    array("modelo" => "Virtus tsi", "cor" => "Preto", "placa" => "ABC1234", "ano" => 2025, "marca" => "Volkswagen", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "Mobi like", "cor" => "Vermelho", "placa" => "DEF5678", "ano" => 2025, "marca" => "Fiat", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "Kwid e-tech", "cor" => "Branco", "placa" => "DEF5678", "ano" => 2024, "marca" => "Renaut", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "Ranger xl", "cor" => "Branco", "placa" => "DEF5678", "ano" => 2024, "marca" => "Peugeut", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "208 allure turbo", "cor" => "Prata", "placa" => "DEF5678", "ano" => 2024, "marca" => "Chevrolet", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "Onix", "cor" => "Branco", "placa" => "DEF5678", "ano" => 2024, "marca" => "Nissan", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "Nissan kicks", "cor" => "Branco", "placa" => "DEF5678", "ano" => 2024, "marca" => "Hyundai", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "Creta", "cor" => "Prata", "placa" => "DEF5678", "ano" => 2024, "marca" => "Toyota", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "Corola", "cor" => "Prata", "placa" => "DEF5678", "ano" => 2024, "marca" => "Land Rover", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "Ranger rover", "cor" => "Branco", "placa" => "DEF5678", "ano" => 2024, "marca" => "BMW", "portas" => 4, "tipo" => "Carro"),
    array("modelo" => "S 1000 rr", "cor" => "Vermelho", "placa" => "DEF5678", "ano" => 2024, "marca" => "Honda", "portas" => 0, "tipo" => "Moto"),
    array("modelo" => "Elite ", "cor" => "Azul", "placa" => "DEF5678", "ano" => 2024, "marca" => "Yamaha", "portas" => 0, "tipo" => "Moto"),
    array("modelo" => "Xmax abs", "cor" => "Azul", "placa" => "DEF5678", "ano" => 2024, "marca" => "Suzuki", "portas" => 0, "tipo" => "Moto"),
    array("modelo" => "V-strom 1050", "cor" => "Vermelho", "placa" => "DEF5678", "ano" => 2024, "marca" => "Kawasaki", "portas" => 0, "tipo" => "Moto"),
    array("modelo" => "Ninja zx-4r", "cor" => "Verde", "placa" => "DEF5678", "ano" => 2024, "marca" => "Ducati", "portas" => 0, "tipo" => "Moto"),
    array("modelo" => "Monster", "cor" => "Vermelho", "placa" => "DEF5678", "ano" => 2024, "marca" => "Harley-Davidson", "portas" => 0, "tipo" => "Moto"),
    array("modelo" => "Sportster", "cor" => "Azul", "placa" => "DEF5678", "ano" => 2024, "marca" => "Harley", "portas" => 0, "tipo" => "Moto"),
    array("modelo" => "Scania super", "cor" => "Verde", "placa" => "DEF5678", "ano" => 2024, "marca" => "Scania", "portas" => 2, "tipo" => "Caminhão"),
    array("modelo" => "Daily mini-bus", "cor" => "Azul", "placa" => "DEF5678", "ano" => 2024, "marca" => "Iveco", "portas" => 3, "tipo" => "Van"),
    array("modelo" => "Ex 30", "cor" => "Branco", "placa" => "DEF5678", "ano" => 2024, "marca" => "Volvo", "portas" => 4, "tipo" => "Carro"),
);
?>

    <?php foreach ($veiculos as $veiculo): ?>
    <tr>
        <td><?php echo $veiculo["modelo"]; ?></td>
        <td><?php echo $veiculo["cor"]; ?></td>
        <td><?php echo $veiculo["placa"]; ?></td>
        <td><?php echo $veiculo["ano"]; ?></td>
        <td><?php echo $veiculo["marca"]; ?></td>
        <td><?php echo $veiculo["portas"]; ?></td>
        <td>
            <button onclick="editarVeiculo(<?php echo $veiculo['placa']; ?>)">Editar</button>
            <button onclick="excluirVeiculo(<?php echo $veiculo['placa']; ?>)">Excluir</button>
        </td>
    </tr>
    
    <?php endforeach; ?>
</table>

<?php

function excluirVeiculo($placa) {
    global $veiculos;
    foreach ($veiculos as $key => $veiculo) {
        if ($veiculo["placa"] == $placa) {
            unset($veiculos[$key]);
            break;
        }
    }
    echo "<meta http-equiv='refresh' content='0'>";
}

?>

<script>
    function editarVeiculo(placa) {
        console.log("Editar veículo com placa: " + placa);
    }

    function excluirVeiculo(placa) {
        console.log("Excluir veículo com placa: " + placa);
    }
</script>

</body>
</html>