<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->
    <!-- <a href="plantilla/reporte/pdf.php"></a> -->
    <!-- <a href="plantilla/reporte/estilosPDF.css"></a> -->
    <?php
    require_once('../vendor/autoload.php');
    require_once('plantilla/reporte/pdf.php');
    $css = file_get_contents('plantilla/reporte/estilosPDF.css');

    $mpdf = new \Mpdf\Mpdf([

    ]);
    $plantilla = getPlantilla();
    $mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
    $mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
    $mpdf->Output();
    ?>
<!-- </body>
</html> -->