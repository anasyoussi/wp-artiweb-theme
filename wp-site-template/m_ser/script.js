// function showContent(paragraphId) {
//     const paragraphs = document.querySelectorAll('.content p');
//     paragraphs.forEach((paragraph) => {
//         paragraph.style.display = 'none';
//     });

//     const selectedParagraph = document.getElementById(paragraphId);
//     selectedParagraph.style.display = 'block';
// }




function showContent(paragraphId) {
    // Cacher tous les paragraphes
    var paragraphs = document.querySelectorAll('.ap');
    paragraphs.forEach(function(paragraph) {
        paragraph.style.display = 'none';
    });

    // Afficher le paragraphe correspondant
    var paragraphToShow = document.getElementById(paragraphId);
    if (paragraphToShow) {
        paragraphToShow.style.display = 'block';
    }

    // Mettre à jour la classe active
    var menuItems = document.querySelectorAll('.menu li');
    menuItems.forEach(function(item) {
        item.classList.remove('active');
    });
    event.target.classList.add('active');
}