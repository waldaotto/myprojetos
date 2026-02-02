<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperShop</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
        >
</head>
    <section>
        <header>
            <nav>
                <ul>
                    <li><strong>SUPER SHOP</strong></li>
                </ul>
                <ul>
                    <li><a href="#" class="contrast">Home</a></li>
                    <li><a href="../app/tela/produtos.php" class="contrast">Produtos</a></li>
                    <li><a href="#" class="contrast">Sobre</a></li>
                    
                </ul>
            </nav>
            <HR>
<?php
        $uri = $_SERVER["REQUEST_URI"];
        if($uri != '/myprojetos/mecanica-shop/public/'){
            ?>
            <button onclick="history.back()">Voltar</button>

<?php
           }
?>
        </header>
    </section>