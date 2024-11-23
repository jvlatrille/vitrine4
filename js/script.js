document.addEventListener('scroll', () => {
    const navbar = document.querySelector('#navbar'); // Cible uniquement la navbar
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled'); // Ajoute le dégradé sombre
    } else {
        navbar.classList.remove('scrolled'); // Retour au dégradé transparent
    }
});