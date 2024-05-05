<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#INICIALIZAR UNA SECION DE CURL; ch =cURL handle
$ch = curl_init(API_URL);
//INDICAR QUE RECIBIMOS LA PETICION Y MOSTRAR EL RESULETADO EN PANTALLA
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//EJECUTTAR Y GUARDAR RESULTADO
$result = curl_exec($ch);
//SI SOLO QUIERES HACER UN GET DE UNA API
// EN VEZDE CURL 
//$data = json_decode($result, true);




$data = json_decode($result, true);


curl_close($ch);


?>

<head>
    <meta charset="UTF-8">
    <title>
        La proxima Pelicula de Marvel
    </title>
    <meta name="description" content="La próxima pelicula de marvel">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>
<main>
    <pre>
        <?php var_dump($data); ?>
    </pre>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>" style="border-radius: 16px" />
    </section>
    <hgroup>
        <h2><?= $data["title"] ?> Se estrena en <?= $data["days_until"] ?> días! </h2>
        <p>Se estena el <?= $data["release_date"] ?></p>
        <p>La siguiente peli es: <?= $data["following_production"]["title"] ?> </p>
    </hgroup>
</main>



<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
        text-align: center;
    }

    .container {
        background-color: red;
    }

    ul {
        list-style: none;
    }
</style>