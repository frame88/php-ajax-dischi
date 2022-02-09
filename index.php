<!-- Esercizio di oggi:
cartella/repo php-ajax-dischi
Stampare a schermo una decina di dischi musicali
Prima Milestone:
Stampiamo i dischi solo con l'utilizzo di PHP, che stampa direttamente i dischi in pagina:
 al caricamento della pagina ci saranno tutti i dischi.

Seconda Milestone:
Attraverso l'utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api,
 i dischi a php e li stamperà attraverso vue. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>dischi php</title>
</head>
<body>
    <?php include_once __DIR__ . '/partials/header.php' ?>

</body>
</html> 