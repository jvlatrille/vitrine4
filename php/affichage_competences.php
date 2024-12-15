<?php
$jsonFile = __DIR__ . '/../json/competences.json';
if (!file_exists($jsonFile)) {
    die('Le fichier JSON est introuvable.');
}
$skills = json_decode(file_get_contents($jsonFile), true);

if (!is_array($skills)) {
    die('Le fichier JSON contient des données invalides.');
}

usort($skills, function ($a, $b) {
    return $b['progress'] <=> $a['progress']; // Tri décroissant
});

foreach ($skills as $skill) {
    echo '<div class="col-md-6 mb-4">';
    echo '    <span class="fw-bold">' . htmlspecialchars($skill['name'], ENT_QUOTES) . '</span>';
    echo '    <div class="progress mt-2">';
    echo '        <div class="progress-bar" role="progressbar" style="width: ' . htmlspecialchars($skill['progress'], ENT_QUOTES) . '%; background-color: primary-color;"';
    echo '             aria-valuenow="' . htmlspecialchars($skill['progress'], ENT_QUOTES) . '"';
    echo '             aria-valuemin="0" aria-valuemax="100">';
    echo '             ' . htmlspecialchars($skill['progress'], ENT_QUOTES) . '%';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}
