<?php
require_once './components/Header.php';
require_once './components/Nav.php';
require_once './components/CardBox.php';

$header = new Header();
$nav = new Nav();
$cardBox = new CardBox();

echo "
<!DOCTYPE html>
<html lang='en'>
    <head>
        <link rel='stylesheet' href='./css/index.css'/>
        <link rel='stylesheet' href='vendor/fortawesome/font-awesome/css/all.min.css'>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>OCIMS</title>
    </head>
    <body>
    <div class='mainView'>
        {$header->render()}
        {$nav->render()}
        <main class='dashboard'>
            {$cardBox->render()}
        </main>
    </div>
        <script src='./scripts/index.js'></script>
    </body>
</html>
";
?>