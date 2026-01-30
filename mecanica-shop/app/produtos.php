<!DOCTYPE html>

<?php
include "header.php";
require_once "buscarprodutos.php";
?>
<body>
    <h2>Pagina de Produtos</h2>

    <form action="buscarprodutos.php" method="get">
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
                    <?php
                    require_once "ProdutosModel.php";
                    $prodmodel = new produtosModel;
                    $produtos = $prodmodel->findall();
                    foreach ($produtos as $key => $value) {
                        $precoformat = "R$ " . number_format($produtos[$key]["preco"], 2, ',', '.');
?>
                        <tr>
                            <td><?= $key?></td>
                            <th scope="row"><?= $produtos[$key]["nome"] ?></th>
                            <td><?= $precoformat?></td>
                            <td><?= $produtos[$key]["descricao"] ?></td>
                            <td><?= $produtos[$key]["estoque"] ?></td>
                        </tr>
        </div>
<?php
        }      
?>
                </tbody>
        </table>

    </div>
</section>
</body>
</html>