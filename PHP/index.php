<?php
    include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- axios  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- vuejs  -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
    
    <div id="root">
        <!-- HEADER  -->
        <header>
            <div class="logo-container">
                <img src="https://png2.cleanpng.com/sh/a47b726b0042a9ff985e6974fb646eee/L0KzQYm3WMI4N6l2j5H0aYP2gLBuTfxwb5CyiOR4ZIXmhH7rhgNqb58yeuRqbnSwd8Pshf4uc5ZzkttuLXHwgH7okP90NaQye9H7bnX1PcT3jCRqbqoyhNHwbz3pgrF0Tfh1dZ0ye58AYki3RrPphMY5QWdpUJCDMUO0Qoa6U8E2O2Y5SKYEOEm3Qom7TwBvbz==/kisspng-logo-product-design-brand-green-kenzie-amp-apos-s-corner-spotify-logo-from-html-c-5b846bbd6896d8.8131253315354049894284.png" alt="logo">
            </div>
        </header>
        <!-- END HEADER  -->

        <!-- MAIN  -->
        <main>

            <!-- albums  -->
            <div class="albums-container">
                <?php foreach($database as $album) { ?>
                    <!-- single album  -->
                    <div class="single-album">
                        <div class="cover">
                            <img src="<?php echo($album['poster']) ?>" alt="<?php echo($album['title']) ?>">
                        </div>
                        <div class="title"><?php echo($album['title']) ?></div>
                        <div class="artist"><?php echo($album['author']) ?></div>
                        <div class="year"><?php echo($album['year']) ?></div>
                    </div>
                    <!-- end single album  -->
                <?php }?>
            </div>
            <!-- end albums  -->

        </main>
        <!-- END MAIN  -->
    </div>

    <!-- JS  -->
    <script src="js/script.js"></script>
</body>
</html>