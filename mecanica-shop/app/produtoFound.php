<!DOCTYPE html>
<?php
    $produto = $GLOBALS["stmt"];
    include "header.php";
    $precoformat = "R$ " . number_format($produto["infos"]["preco"], 2, ',', '.')
?>
<body>
    <h2>Produto encontrado</h2>

    <form action="buscarproduto.php" method="get">
    <label for="buscaproduto">Pesquisar produtos</label>
    <input type="search" name="buscaproduto" placeholder="Digite o ID do produto ou nome...">
    <button type="submit">Buscar</button>
</form>

<section>
    <div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Estoque (uni.)</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td><?= $produto["id"]?></td>
                            <th scope="row"><?= $produto["infos"]["nome"] ?></th>
                            <td><?= $precoformat?></td>
                            <td><?= $produto["infos"]["descricao"] ?></td>
                            <td><?= $produto["infos"]["estoque"] ?></td>
                        </tr>
                    </div>
                </tbody>
        </table>

    </div>
</section>
</body>

<?php

?>