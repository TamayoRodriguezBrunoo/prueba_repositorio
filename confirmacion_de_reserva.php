<?php
 $nom=(isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "FALTA NOMBRE";
 $ape=(isset($_POST['apellidos']) && $_POST["apellidos"] != "")? $_POST['apellidos'] : "FALTAN APELLIDOS";
 $conc=(isset($_POST['conciertoo']) && $_POST["conciertoo"] != "--Seleccionar concierto--")? $_POST['conciertoo'] : "CONCIERTO SIN SELECCIONAR";
 $lug=(isset($_POST['lugar']) && $_POST["lugar"] != "")? $_POST['lugar'] : "SIN LUGAR";
 $fec=(isset($_POST['fecha']) && $_POST["fecha"] != "")? $_POST['fecha'] : "SIN FECHA";
 $ext1=(isset($_POST['extra1']) && $_POST["extra1"] != "--Seleccionar--")? $_POST['extra1'] : "SIN SELECCIONAR";
 $ext2=(isset($_POST['extra2']) && $_POST["extra2"] != "--Seleccionar--")? $_POST['extra2'] : "SIN SELECCIONAR";
 $ext3=(isset($_POST['extra3']) && $_POST["extra3"] != "--Seleccionar--")? $_POST['extra3'] : "SIN SELECCIONAR";
 $bole=(isset($_POST['bol']) && $_POST["bol"] != "")? $_POST['bol'] : "0 y sin compra";


 echo' <link rel="icon" type="ticket" href="https://abstract-technology.de/media/plog-2014/ticket.png/@@images/image.png" size="32x32">
 <h1 align = "center">VERIFICAR BOLETOS</h1>
<center>
    <table border="6" style="border-collapse:collapdr" cellpadding="10px">
            <tbody>
                <tr>
                    <td>Asiste: '.$nom.' '.$ape.'</td>
                </tr>
                <tr>
                    <td>Artista en funcion: '.$conc.'</td>
                    <td>El dia: '.$fec.'</td>
                    <td>En la zona: '.$lug.'</td>
                </tr>
                <tr>
                    <td>Su servicio estara:</td>
                    <td>'.$ext1.'</td>
                    <td>'.$ext2.'</td>
                    <td>'.$ext3.'</td>
                </tr>
                <tr>
                    <td>La adquisicion de boletos fueron de '.$bole.' </td>
                </tr>
                <tr>
                    <td>¡Gracias por su compra!</td>
                </tr>
            </tbody>
</center>
        '

 ?>
 <!DOCTYPE html>
 <html>
 <body>
 </body>
 </html>