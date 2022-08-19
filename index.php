<?php
    use Dompdf\Dompdf;
    require_once 'dompdf/autoload.inc.php';


    $dom = new Dompdf();

    $nome = "Anderson Vanin";

    $lista = "<ul>";
    for ($i=0; $i < 5 ; $i++) { 
        //echo "Valor do i => $i <br>";
        $lista .= "<li>Item $i</li>";
    }
    $lista .= "</ul>";

    $dom->loadHtml('
        <h1>TITULO DO CURRICULO</h1>
        <p> TEXTO QUALQUER </p>
        <p> Nome: '.$nome.'</p>
        <p>'.$lista.'</p>
    ');

    $dom->render();

    $dom->stream(
        "relatorio.pdf",
        array(
            "Attachment"=>false
        )
    );


?>