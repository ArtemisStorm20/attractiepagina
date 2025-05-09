<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Developerland / Attracties</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside class="sidebar">
            <div class="search-box">
                <input type="text" placeholder="Zoeken..." class="search-input">
                <input type="text" placeholder="Filter..." class="search-input">
                <input type="text" placeholder="Sorteren..." class="search-input">
                <button class="search-button">🔍</button>
            </div>
        </aside>
        <main>
            <h1>Developerland / Attracties</h1>
            <div class="attractions-grid">
                <!-- Eerste rij -->
                <div class="attraction-card">
                    <div class="card-image">
                        <!-- Placeholder voor attractie afbeelding -->
                    </div>
                </div>
                
                <div class="attraction-card">
                    <div class="card-image">
                        <!-- Placeholder voor attractie afbeelding -->
                    </div>
                </div>
                
                <div class="attraction-card featured">
                    <div class="card-image">
                        <img src="img/attracties/chris-slupski-QLqIqIhMiNs-unsplash.jpg" alt="Speedy XL">
                    </div>
                    <div class="card-content">
                        <h3>Speedy XL</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur ut labore adipiscing elit, sed do.</p>
                        <p class="height-requirement">120cm minimale lengte</p>
                    </div>
                </div>
                
                <!-- Tweede rij -->
                <div class="attraction-card">
                    <div class="card-image">
                        <!-- Placeholder voor attractie afbeelding -->
                    </div>
                </div>
                
                <div class="attraction-card">
                    <div class="card-image">
                        <!-- Placeholder voor attractie afbeelding -->
                    </div>
                </div>
                
                <div class="attraction-card">
                    <div class="card-image">
                        <!-- Placeholder voor attractie afbeelding -->
                    </div>
                </div>
                
                <!-- Derde rij -->
                <div class="attraction-card adventureland">
                    <div class="card-image">
                        <img src="img/attracties/jeriden-villegas-XrDVROYUTOs-unsplash.jpg" alt="Speedy XL">
                    </div>
                    <div class="card-content">
                        <span class="land-tag">ADVENTURELAND</span>
                        <h3>Speedy XL</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur ut labore adipiscing elit, sed do</p>
                        <a href="#" class="fast-pass-button">FAST PASS</a>
                    </div>
                </div>
                
                <div class="attraction-card">
                    <div class="card-image">
                        <!-- Placeholder voor attractie afbeelding -->
                    </div>
                </div>
                
                <div class="attraction-card">
                    <div class="card-image">
                        <!-- Placeholder voor attractie afbeelding -->
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
