<!DOCTYPE html>
<html>
<head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
    <title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
    <link rel='stylesheet'
          type='text/css'
          media='only screen and (min-width: 530px) and (min-device-width: 481px)'
          href='estilos/wide.css' />
    <link rel='stylesheet'
          type='text/css'
          media='only screen and (max-width: 480px)'
          href='estilos/smartphone.css' />
</head>
<body>
<div id='page-wrap'>
    <header class='main' id='h1'>
        <span class="right"><a href="registro">Registrarse</a></span>
        <span class="right"><a href="login">Login</a></span>
        <span class="right" style="display:none;"><a href="/logout">Logout</a></span>
        <h2>Quiz: el juego de las preguntas</h2>
    </header>
    <nav class='main' id='n1' role='navigation'>
        <span><a href='layout.html'>Inicio</a></span>
        <span><a href='preguntaHTML5.html'>Insertar Pregunta</a></span>
        <span><a href='creditos.html'>Creditos</a></span>
        <span><a href='verPreguntas.php'>Ver Preguntas</a></span>
    </nav>
    <section class="main" id="s1" >

        <div class="db-data" style="font-weight: bold ; font-size: large">
            <?php
            include "configDB.php";
            $link = mysqli_connect($server,$user,$pass,$basededatos);
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($link,"SELECT email,enunciado,correct, foto FROM preguntas");
            echo "<table style='width:100%' border='1'>
            <tr>
            <th>Autor</th>
            <th>Enunciado</th>
            <th>Respuesta Correcta</th>
            <th>Imagen</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {

                echo "<tr>";
                echo "<td style='white-space: pre-line'>" . $row['email'] . "</td>";
                echo "<td style='white-space: pre-line'>" . $row['enunciado'] . "</td>";
                echo "<td style='white-space: pre-line'>" . $row['correct'] . "</td>";
                echo '<td> <img height="250" width="150" src="data:image/*;base64,'.base64_encode($row['foto']).' "/>';
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($link);
            ?>
        </div>
    </section>
    <footer class='main' id='f1'>
        <a href='https://github.com/elsahipatia/SW_Lab3'>Link GITHUB</a>
    </footer>
</div>
</body>
</html>
