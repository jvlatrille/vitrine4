<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jules VINET LATRILLE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="icon" href="img/logo_noir.png" type="image/png">
    <script src="js/jquery-1.8.3.min.js"></script>
</head>

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="#Accueil">
            <img id="navbarLogo" src="" alt="Logo" style="width: 100px; height: 100px; object-fit: cover;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#Accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Competences">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#MeContacter">Me contacter</a>
                </li>
                <!-- Bouton pour changer de mode -->
                <li class="nav-item">
                    <button id="toggleMode" class="btn btn-outline-light">Mode sombre</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById("toggleMode");
        const currentMode = localStorage.getItem("theme") || "light";

        // Appliquer le mode actuel
        document.body.classList.add(currentMode + "-mode");

        // Ajuster le texte du bouton
        toggleButton.textContent = currentMode === "light" ? "Mode sombre" : "Mode clair";

        // Écouteur pour basculer entre les modes
        toggleButton.addEventListener("click", () => {
            const isDarkMode = document.body.classList.contains("dark-mode");
            document.body.classList.toggle("light-mode", isDarkMode);
            document.body.classList.toggle("dark-mode", !isDarkMode);

            // Sauvegarder la préférence dans le local storage
            const newMode = isDarkMode ? "light" : "dark";
            localStorage.setItem("theme", newMode);

            // Mettre à jour le texte du bouton
            toggleButton.textContent = isDarkMode ? "Mode sombre" : "Mode clair";
        });
    });
</script>


<!-- Main Header -->
<header id="Accueil" class="main-header vh-100 position-relative">
    <div class="position-absolute top-0 start-0 w-100 h-100 header-background"></div>
    <div
        class="position-relative text-center text-white d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">Jules VINET LATRILLE</h1>
        <p class="lead mt-3">
            <strong>Étudiant en première année de BUT Informatique à Anglet</strong><br><br>
            Voici mon portfolio.<br>
            Dans celui-ci, vous trouverez une documentation de mon développement de compétences tout au long de
            mon parcours en BUT. Il sert à consigner mes progrès et à présenter mes niveaux de compétences.
        </p>
    </div>
</header>

<section class="about-section text-center py-5" id="Profil">
    <div class="container">
        <!-- Titre de la section -->
        <h2 class="mb-4">Présentation</h2>
        <hr class="w-50 mx-auto mb-4">
        <p class="fs-5">
            Bonjour, moi c'est Jules.<br>
            Je suis un étudiant en 2ème année de BUT Informatique, passionné par le monde du numérique depuis tout
            petit.<br>
            Je maîtrise beaucoup de langages de programmation tels que Python, C++, Bash, ou encore des langages web
            tels que le HTML, CSS, JavaScript, et PHP.<br>
            J'ai réalisé de nombreux projets, personnels comme professionnels, que vous pouvez retrouver dans ma
            section
            Portfolio, et dans mes <a href="https://github.com/jvlatrille" target="_blank">repos GitHub</a>.
        </p>

        <!-- Blocs d'informations -->
        <div class="row text-center mt-5">
            <!-- Bloc Parcours scolaire -->
            <div class="col-md-4 mb-4">
                <img src="img/scolaire.png" alt="Parcours scolaire" class="img-fluid mb-3"
                    style="max-height: 150px;">
                <h3>Parcours scolaire</h3>
                <p>Collège : Errobi, Cambo-les-Bains<br>Lycée : Cassin, Bayonne<br>BUT : Informatique, Anglet</p>
            </div>

            <!-- Bloc Mes ambitions -->
            <div class="col-md-4 mb-4">
                <img src="img/ambitions.png" alt="Mes ambitions" class="img-fluid mb-3" style="max-height: 150px;">
                <h3>Mes ambitions</h3>
                <p>Gagner un maximum d'argent</p>
            </div>

            <!-- Bloc Adjectifs pour me qualifier -->
            <div class="col-md-4 mb-4">
                <img src="img/adjectifs.png" alt="Adjectifs pour me qualifier" class="img-fluid mb-3"
                    style="max-height: 150px;">
                <h3>Adjectifs pour me qualifier</h3>
                <p>Calme, sérieux, attentif, à l'écoute, efficace</p>
            </div>
        </div>
    </div>
</section>


<section class="skills-section py-5" id="Competences">
    <div class="container">
        <!-- Titre de la section -->
        <h2 class="text-center mb-4">Mes compétences</h2>
        <hr class="w-50 mx-auto mb-5">

        <!-- Liste des compétences -->
        <div class="row">
            <?php include 'php/affichage_competences.php'; ?>
        </div>

        <!-- Téléchargement du CV -->
        <div class="text-center mt-5">
            <img src="doc/CV.png" alt="CV de Jules VINET LATRILLE" class="img-fluid mb-3" style="max-width: 200px;">
            <br>
            <a href="doc/CV.pdf" class="btn btn-primary" download>Télécharger mon CV</a>
        </div>
    </div>
</section>




<section class="projects-section py-5" id="Portfolio">
    <div class="container">
        <h2 class="text-center mb-4">Mon portfolio</h2>
        <hr class="w-50 mx-auto mb-5">
        <div class="row gy-4">
            <?php include 'php/affichage_portfolio.php'; ?>
        </div>
    </div>
</section>


<!-- Modèle PopUp -->
<div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupTitle" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content p-0 border-0">
            <div class="popup-background w-100 h-100 position-relative">
                <img id="popupImage" src="" alt="Image du projet" class="w-100 h-100 object-fit-cover">
                <div
                    class="popup-text position-absolute top-0 end-0 w-50 h-100 d-flex flex-column justify-content-center p-5">
                    <h5 id="popupTitle" class="display-5 fw-bold mb-4"></h5>
                    <div id="popupContent" class="fs-5 mb-4"></div>
                    <button type="button" class="btn btn-dark w-50" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function openPopup(element) {
        const title = element.dataset.title;
        const image = element.dataset.image;
        const content = element.dataset.content;

        document.getElementById('popupTitle').innerText = title;
        document.getElementById('popupImage').src = image;
        document.getElementById('popupContent').innerHTML = content;

        const modal = new bootstrap.Modal(document.getElementById('popupModal'));
        modal.show();
    }
</script>


<section class="contact-section py-5" id="MeContacter">
    <div class="container">
        <h2 class="text-center mb-4">Me Contacter</h2>
        <p class="text-center fs-5">
            Mon adresse mail :
            <a href="mailto:julesvinet64@gmail.com">julesvinet64@gmail.com</a>
        </p>
        <hr class="w-50 mx-auto mb-5">

        <!-- Formulaire de contact -->
        <form id="contactForm" class="mx-auto" style="max-width: 600px;" action="php/send_contact.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nom :</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message :</label>
                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Envoyer</button>
        </form>

        <!-- Réponse au formulaire -->
        <div id="formResponse" class="text-center mt-4"></div>
    </div>

    <!-- Popup Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Message envoyé</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Votre message a été envoyé avec succès. Merci de m'avoir contacté !
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', async function(event) {
        event.preventDefault();

        const formData = new FormData(this);
        const formResponse = document.getElementById('formResponse');

        try {
            const response = await fetch('php/send_contact.php', {
                method: 'POST',
                body: formData,
            });
            const result = await response.json();

            if (result.success) {
                // Affiche le popup de succès
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();

                // Réinitialise le formulaire
                this.reset();
                formResponse.innerHTML = '';
            } else {
                formResponse.innerHTML = `<p class="text-danger">${result.message}</p>`;
            }
        } catch (error) {
            formResponse.innerHTML = `<p class="text-danger">Une erreur est survenue. Veuillez réessayer plus tard.</p>`;
        }
    });
</script>







<!-- footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <!-- Informations de copyright -->
        <p class="mb-3">&copy; 2024 Jules VINET LATRILLE. Tous droits réservés.</p>

        <!-- Logos des réseaux sociaux -->
        <div class="d-flex justify-content-center gap-3">
            <a href="https://github.com/jvlatrille" target="_blank" aria-label="GitHub">
                <img src="img/github_logo.png" alt="GitHub" style="width: 40px;">
            </a>
            <a href="https://www.linkedin.com/in/julesvinetlatrille/" target="_blank" aria-label="LinkedIn">
                <img src="img/linkedin_logo.png" alt="LinkedIn" style="width: 40px;">
            </a>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="js/script.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>