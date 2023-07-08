<!-- <link rel="stylesheet" type="text/css" href="estilosPDF.css" media="print" /> -->
<?php
function getPlantilla(){
    $hola = 'hola';
$plantilla ='
<body>
    <div class="contenedo-general">
        <div id="div-header">
                <img src="imagenes/logoPC.png" alt="" class="img">
                <div id="div-header-1">
                    <h2>SERVICOS FINANCIEROS PRESTA CASH SRL</h2>
                </div>
                <div id="div-header-2">
                    <h2>RUC: 20601735343</h2>
                </div>
        </div>
        <div id="div-header2">
            <div>
            <h3 id="titulo" style="text-decoration: underline;">PROPUESTA DE CREDITO</h3>
            </div>
            <div id="titulo2">
                <h4>Fecha: ____/____/_____</h4>
            </div>
        </div>
        <div>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 50%;height: 35px;background-color: #bbb6b6;"><h4>APELLIDOS Y NOMBRE DE CLIENTE:</h4></th>
                        <th style="width: 20%;height: 35px;background-color: #bbb6b6;"><h4>DNI:</h4></th>
                        <th style="width: 30%;height: 35px;background-color: #bbb6b6;"><h4>ESTADO CIVIL:</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="height: 40px;">' . $hola . '</td>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 65%; height: 35px; background-color: #bbb6b6;"><h4>DIRECCIÓN: AA.HH MZ-LT/CALLE/AV - DISTRITO PROVINCIA</h4></th>
                        <th style="width: 35%; height: 35px; background-color: #bbb6b6;"><h4>CELULAR:</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 60%; height: 35px; background-color: #bbb6b6;"><h4>REFERENCIA:</h4></th>
                        <th style="width: 40%; height: 35px; background-color: #bbb6b6;"><h4>CONYUGE</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 14%; height: 35px; background-color: #bbb6b6;"><h4>MONTO SOLICITADO:</h4></th>
                        <th style="width: 14%; height: 35px; background-color: #bbb6b6;"><h4>MONTO APROBADO:</h4></th>
                        <th style="width: 14%; height: 35px; background-color: #bbb6b6;"><h4>SALDO PENDIENTE:</h4></th>
                        <th style="width: 14%; height: 35px; background-color: #bbb6b6;"><h4>MORA:</h4></th>
                        <th style="width: 14%; height: 35px; background-color: #bbb6b6;"><h4>MONTO A ENTREGAR:</h4></th>
                        <th style="width: 14%; height: 35px; background-color: #bbb6b6;"><h4>% TASA:</h4></th>
                        <th style="width: 14%; height: 35px; background-color: #bbb6b6;"><h4>PAZO</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                        <td style="height: 40px;"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="color-cabecera" style="height: 60px;"><h5>TIPO DE CREDITO:</h5></th>
                        <td colspan="2" style="height: 60px;"></td>
                        <th scope="row" class="color-cabecera" style="height: 60px;"><h5>FORMA DE PAGO:</h5></th>
                        <td colspan="3" style="height: 60px;"></td>
                    </tr>
                </tbody>
                <!-- <td colspan="2" rowspan="2">Trabajar</td> -->
            </table>
        </div>
        <div id="div-body">
            <div id="div-body-1">
                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 35%; height: 80px; background-color: #bbb6b6;"><h5>EXPERIENCIA CREDITICIA:</h5></th>
                            <td style="height: 80px;"><h5></h5></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="background-color: #bbb6b6; height: 100px;"><h5>NEGOCIO:</h5></th>
                            <td style="height: 100px;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="div-body-2">
                <table style="width: 100%;">
                        <tr>
                            <th style="width: 100%;background-color: #bbb6b6; height: 45px;"><h5>COMENTARIO DEL TUTOR:</h5></th>
                        </tr>
                        <tr>
                            <td style="height: 135px;"></td>
                        </tr>
                </table>
            </div>
        </div>
        <div style="width: 100%; height: 80px;">
            <table style="width: 100%;">
                <tr>
                    <th style="width: 15.1%;background-color: #bbb6b6; height: 80px;"><h5>DESTINO DE CREDITO:</h5></th>
                    <td style="width: 84.9%;"><h5></h5></td>
                </tr>
            </table>
        </div>
        
        <div style="width: 100%; height: 140px; border: 1px solid #000;">
            <h5 style="margin:10px;">FIMA DE COMITE</h5>
        </div>

        <div id="div-foot" >
            <div id="div-foot-1">
                <h5 id="firma-jefe">JEFE DE CREDITOS</h5>
            </div>
            <div id="div-foot-2">
                <h5 id="firma-gestor">GESTOR DE COBRANZA</h5>
            </div>
            
        </div>
    </div>
<body>';

return $plantilla;
}