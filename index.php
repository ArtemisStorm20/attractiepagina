<?php
session_start();
require_once 'admin/backend/config.php';
require_once 'admin/backend/conn.php';

// Fetch rides from database
$query = "SELECT * FROM rides";
$statement = $conn->prepare($query);
$statement->execute();
$rides = $statement->fetchAll(PDO::FETCH_ASSOC);
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
                <?php foreach ($rides as $ride): ?>
                    <div class="attraction-card <?php echo htmlspecialchars($ride['themeland']); ?>">
                        <div class="card-image">
                            <img src="img/attracties/<?php echo htmlspecialchars($ride['img_file'] ?? 'default.jpg'); ?>" alt="<?php echo htmlspecialchars($ride['title']); ?>">
                        </div>
                        <div class="card-content">
                            <h3><?php echo htmlspecialchars($ride['title']); ?></h3>
                            <p><?php echo htmlspecialchars($ride['description']); ?></p>
                            <?php if (!empty($ride['min_length'])): ?>
                                <p class="height-requirement"><?php echo htmlspecialchars($ride['min_length']); ?>cm minimale lengte</p>
                            <?php endif; ?>
                            <?php if (!empty($ride['fast_pass']) && $ride['fast_pass'] == 1): ?>
                                <a href="#" class="fast-pass-button">FAST PASS</a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>

</body>

</html>
