<?php
require_once './components/Header.php';
require_once './components/Nav.php';
require_once './components/CardBox.php';

$header = new Header();
$nav = new Nav();
$cardBox = new CardBox();

$cardBox->addCard("Stock", "<div id='content1'></div><span class='tooltip'>Click to expand</span>");
$cardBox->addCard("Card 2", "<div id='content2'></div>");
$cardBox->addCard("Card 3", "<div id='content3'></div>");

$nav->addNavItem('Dashboard');

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
            <div id='statbar' class='statbar'>
                <div id='key1'></div>
                <div id='key2'></div>
                <div id='key3'></div>
                <div id='key4'></div>
                <div id='key5'></div>
            </div>
            {$cardBox->render()}
        </main>
    </div>
    <div id='modal' class='modal'>
        <div class='modal-content'>
        <button id='exportButton'>Export as XLSX</button>
            <span class='close'>&times;</span>
            <div id='modal-body'></div>
        </div>
    </div>    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js'></script>
    <script type='module' src='./scripts/index.php'></script>
    </body>
</html>
";
?>