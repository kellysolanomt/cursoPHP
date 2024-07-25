<?php

    // URL de la API de Marvel
    const API_URL = "https://whenisthenextmcufilm.com/api";

    // Inicializar una nueva sesión de cURL; ch = curl handle
    $ch = curl_init(API_URL);

    // Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Ejecutar la petición y guardamos el resultado
    $result = curl_exec($ch);

    // Verificar si hubo errores en la ejecución de cURL
    if (curl_errno($ch)) {
        echo 'Error en cURL: ' . curl_error($ch);
    } else {
        // Decodificar el resultado JSON
        $data = json_decode($result, true);

        // Verificar si la decodificación fue exitosa
        if (json_last_error() === JSON_ERROR_NONE) {
            //var_dump($data);
        } else {
            echo 'Error al decodificar JSON: ' . json_last_error_msg();
        }
    }

    // Cerrar la sesión de cURL
    curl_close($ch);

?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>La próxima pelicula de Marvel</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
        />
</head>

<main>

    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300"/>
    </section>
    <hgroup>
        <h3><?= $data["title"];?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"];?></p>
    </hgroup>
</main>


<style>
    body{
        margin: 0;
        padding: 0;
    }
    main{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }
</style>