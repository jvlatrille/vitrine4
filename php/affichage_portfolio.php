<?php
// Charger le fichier JSON
$jsonFile = __DIR__ . '/../json/portfolio.json';
if (!file_exists($jsonFile)) {
    die('Le fichier JSON est introuvable.');
}
$projects = json_decode(file_get_contents($jsonFile), true);

// Générer l'affichage
foreach ($projects as $project) {
    echo '<div class="col-md-6 col-lg-3">';
    echo '    <div class="project-item position-relative" onclick="openPopup(this)"';
    echo '         data-title="' . htmlspecialchars($project['title'], ENT_QUOTES) . '"';
    echo '         data-image="' . htmlspecialchars($project['popupImage'], ENT_QUOTES) . '"';
    echo '         data-content="' . htmlspecialchars($project['popupContent'], ENT_QUOTES) . '">';
    echo '        <img src="' . htmlspecialchars($project['thumbnail'], ENT_QUOTES) . '" class="img-fluid rounded" alt="' . htmlspecialchars($project['alt'], ENT_QUOTES) . '">';
    echo '        <div class="overlay d-flex flex-column justify-content-center align-items-center">';
    echo '            <h5 class="text-white">' . htmlspecialchars($project['title']) . '</h5>';
    echo '            <p class="text-white text-center">' . htmlspecialchars($project['description']) . '</p>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}
?>
