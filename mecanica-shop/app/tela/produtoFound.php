<!DOCTYPE html>
<?php
    $produto = $GLOBALS["stmt"];
    include "header.php";
    $precoformat = "R$ " . number_format($produto["infos"]["preco"], 2, ',', '.')
?>
<body>
    <h2>Produto encontrado</h2>


<section>
    <div>
        <div>
            <table>
                <thead>
                    <tr data-theme="light">
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