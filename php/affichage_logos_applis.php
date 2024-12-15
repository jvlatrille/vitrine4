<?php
$jsonFile = __DIR__ . '/../json/applis.json';

if (file_exists($jsonFile)) {
    $applis = json_decode(file_get_contents($jsonFile), true);

    if (!empty($applis)) {
        // Trier les applications par niveau décroissant
        usort($applis, function ($a, $b) {
            return $b['level'] - $a['level'];
        });

        echo '<div class="row justify-content-center mb-5">';
        foreach ($applis as $appli) {
            $level = $appli['level'];
            echo '
                <div class="col-6 col-md-3 col-lg-2 text-center position-relative mb-4">
                    <div class="logo-wrapper" data-level="' . $level . '">
                        <img src="' . htmlspecialchars($appli['logo']) . '" alt="' . htmlspecialchars($appli['name']) . '" class="img-fluid app-logo">
                        <div class="progress-circle"></div>
                    </div>
                    <p class="mt-2">' . htmlspecialchars($appli['name']) . '</p>
                </div>
            ';
        }
        echo '</div>';
    } else {
        echo '<p class="text-center">Aucune application trouvée.</p>';
    }
} else {
    echo '<p class="text-center text-danger">Le fichier des applications est introuvable.</p>';
}
?>
