<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>2 milestone</title>
</head>
<body>
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <main id="app">
        <div class="container">
            <div class="albums">
                <div class="album" v-for="album in albums">
                    <div class="album-cover">
                        <img :src="album.poster" alt="">   
                    </div>
                    <h3>{{album.title}}</h3>
                    <p> {{album.author}}</p>
                    <p>{{album.year}}</p>
                </div>
            </div>
        </div>
    </main>

    <?php include_once __DIR__ . '/partials/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>