<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="ticket" href="https://abstract-technology.de/media/plog-2014/ticket.png/@@images/image.png" size="32x32">
    
    <title>Tu concertista</title>
    </head>

    <body>
        <h1 align="center"> TU CONCERTISTA </h1>
        <img src="https://www.freeiconspng.com/thumbs/hd-tickets/two-tickets-interface-icons-outline-16.png" align="right" height="100">
        <img src="https://www.freeiconspng.com/thumbs/hd-tickets/two-tickets-interface-icons-outline-16.png" align="left" height="100">
        <h2 align="center"> <u><strong> El concertista mexicano, al servicio de tus melomanas experiencias. </strong></u></h2>
        <hr>
        <hr>
        <img src="https://www.freeiconspng.com/thumbs/hd-tickets/two-tickets-interface-icons-outline-16.png" align="right" height="100">
        <img src="https://www.freeiconspng.com/thumbs/hd-tickets/two-tickets-interface-icons-outline-16.png" align="left" height="100">
        <p align="center">¡HOLA!, somos una pequeña empresa vendedora de boletos 100% mexicana y avalada por la SEGOB, realizamos el apoyo de venta y distribucion de boletos y pases para eventos nacionales, ante las crisis que ha llevado ticketmaster.</p>
        <hr>
        <hr>
        <h3 align="center"><u><strong>Algunas funciones disponibles...</strong></u></h3>

        <table border="6" style="border-collapse:collapdr" cellpadding="10px">
            <thead>
                        <tr>
                                <td>Luis Miguel</td>  
                                <td>Después de tener el récord mundial de más presentaciones consecutivas en el Auditorio Nacional, este año sus conciertos serán en la Arena Ciudad de México, en la alcaldía Azcapotzalco. </td>
                                <td><img src="https://www.eluniversal.com.mx/resizer/ZMTyDbAVGBabzFIjnTL6nkvfcB4=/1100x666/filters:focal(562x407:572x417)/cloudfront-us-east-1.images.arcpublishing.com/eluniversal/O6YEJ7UL6VGOHMFH56LBGQDTCE.jpg" width="195" height="175"></td>  
          <tr>
          
                                <td>Caifanes</td>  
                                <td>Caifanes se presentará en cuatro fechas con su Tour 2023 – 2024 en nuestro país en ellas tocará las ciudades más cosmopolitas de nuestro territorio, Guadalajara y Ciudad de México.​</td>
                                <td><img src="https://ca-times.brightspotcdn.com/dims4/default/3c1ee1d/2147483647/strip/true/crop/1610x1108+0+0/resize/1200x826!/quality/80/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F56%2F32%2F01b3fc965150482485cbb43ab034%2Fcfdj8emgq7504ddbn1ibedbziqdndfzrjw34ruojh5-f5qdxtvlmlhce9fd7vq92rnxtnawkslgsyqyxz74m16ry-kvm-3e-jahnzk88tqfbsbhfmkl-5gqm5ojahopihpgbtn3f5vbw0suwxep5aqnstn4r2vpogx0qctz1sfcbowyumbdkxwd3k8atc50jk5ankne6fqdtq-sayqll5vyj8savuhu5irrinnb5wgzxogjtzs4qdq1dswj0c6xupkmgisfkypoq7nloyn9ymwrp571sgokshwcdv80y-32cy7qdyko3i9cjl7sykxpumpwbtgekup-mkhwct-csm-wxhx8pdyhtok7fixhfgbuqlinzkkh7snaj0acqgvrtko-xwhrovshhsezvteqky6qk31c" width="175" height="150"> </td>     
          <tr>
                                <td>Tributo; Gustavo Cerati</td>  
                                <td>Los festivales en Argentina resultaron determinantes para educar a generaciones nacidas al calor del rock and roll. En esa lógica, Cosquín Rock terminó instalándose como una de las plataformas más populares, sólidas y vigentes del país. Cuna de aventuras, el Cosquín Rock juntó a Charly García con Pity Álvarez, hizo vibrar a cientos con Las Pelotas, León Gieco y Babasónicos y emocionó a todos con Luis Alberto Spinetta tributando a Gustavo Cerati.​ </td>
                                <td><img src="https://img.gruporeforma.com/imagenes/960x640/6/453/5452647.jpg" width="175" height="175" ></td>     
          <tr>
                                <td>Vive Latino</td>  
                                <td>El Vive Latino llega el 18 y 19 de marzo de 2023! A darle a los 80 proyectos musicales y actividades que son tradición.</td>
                                <td><img src="https://www.vivelatino.com.mx/uploads/Logo_principal_03_33260713f5.png" width="190"  height="150" ></td>     
          <tr>
        </table>
        <br>
        <hr>
        <h3 align ="center"><strong><u>Reservaciones</u></strong></h3>
        <br>
        <hr>
        <br>
        <form action="./confirmacion_de_reserva.php" method="post">
            <label for="nom"><strong><u>Nombre(s):</u></strong></label>
                <input type="text" id="nom" name="nombre" required>
            <br>
            <hr>
            <br>
            <label for="ape"><strong><u>Apellidos:</u></strong></label>
                <input type="text" id="ape" name="apellidos" required>
            <br>
            <hr>
            <br>
            <label><strong><u>¿Qué artista quieres ver?</u></strong></label>
            <br>
            <br>
            <input type="radio" name="conciertoo" value="Luis Miguel" required>Luis Miguel
            <br>
                 <input type="radio" name="conciertoo" value="Caifanes" required>Caifanes
            <br>
                <input type="radio" name="conciertoo" value="Gustavo Cerati" required>Gustavo Cerati
            <br>
                <input type="radio" name="conciertoo" value="Vive Latino" required>Vive Latino
            <br>
            <hr>
            <br>
                <label><strong><u>¿Donde quieres verlo(s)?</u></strong></label>
                <br>
                <br>
                    <input type="radio" name="lugar" value="General" required>General
                <br>
                    <input type="radio" name="lugar" value="Seccion A" required>Seccion a
                <br>
                    <input type="radio" name="lugar" value="Seccion B" required>Seccion b
                <br>
                    <input type="radio" name="lugar" value="Seccion C" required>Seccion c
                <br>
                    <input type="radio" name="lugar" value="Gradas" required>Gradas
            <br>
            <hr>
            <br>
                <label for="dia"><strong>Elegir fecha:</strong></label>
                    <input type="date" id="dia" name="fecha" required>
            <br>
            <hr>
            <br>
            <label for="extras1"><strong><u>¿Estacionamiento?</u></strong></label>
                <select name="extra1" id="extr1" required>
                    <option value="sin estacionamiento" required>Sin estacionamiento</option>
                    <option value="con estacionamiento" required>Con estacionamiento</option>
                </select>
            <br>
            <hr>
            <br>
                <label for="estras2"><strong><u>¿Luces?</u></strong></label>
                <select name="extra2" id="ext2" required>
                    <option value="sin luces de festival" required>Sin luces de festival</option>
                    <option value="con luces de festival" required>Con luces de festival</option>
                </select>
            <br>
            <hr>
            <br>
                    <label for="extras3"><strong><u>¿Buffet?</u></strong></label>
                <select name="extra3" id="ext3" required>
                    <option value="sin buffet" required>Sin buffet</option>
                    <option value="con buffet" required>Con buffet</option>
                </select>
            <br>
            <hr>
            <br>
                <label for="cantbol"><strong>¿Cuántos boletos llevarás?</strong></label>
                    <input type="number" id="cantbol" name="bol" placeholder="Máximo 15" min="1" max="15" required>
            <br>
            <hr>
            <br>
        <button type="submit">Enviar</button>
        <button type="reset">Reintentar</button>
        <br>
        <hr>
        <br>
    </form>
    </body>
</html>