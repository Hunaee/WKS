// Sélectionner tous les éléments avec la classe "section_filtre"
var sections = document.querySelectorAll('.section_filtre');

// Parcourir chaque élément et ajouter un écouteur d'événements pour le clic
sections.forEach(function(section) {
    section.addEventListener('click', function() {
        // Obtenir le style calculé de l'élément
        var computedStyle = window.getComputedStyle(section);

        // Vérifier si le style calculé de fontWeight est 'bold'
        var isBold = computedStyle.getPropertyValue('font-weight') === '700';

        // Si la section est déjà en gras, lui donner le style normal, sinon lui donner le style gras
        if (isBold) {
            section.style.fontWeight = 'normal';
        } else {
            section.style.fontWeight = '700';
        }
    });
});
