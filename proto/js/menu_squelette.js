

let a_nav_bar = document.querySelectorAll('a');



a_nav_bar.forEach(function(page) {
    page.addEventListener("mouseover", function() {
        page.style.color = '#8E8DC1';
    });

    page.addEventListener("mouseout", function() {
        page.style.color= 'black';
    });
});




// Mobile

let pop_up_menu = document.getElementById('logo_img_mobile');
let bloc_menu_display = document.getElementById('bloc_menu');

pop_up_menu.addEventListener('click', function (){
    event.stopPropagation();
    let computed_style = window.getComputedStyle(bloc_menu_display);
    let display_style = computed_style.getPropertyValue('display');



    if(display_style === 'none') {
        bloc_menu_display.style.display = 'flex';
        bloc_menu_display.style.position = 'fixed';
    }
});


document.addEventListener('click', function(){
    let computed_style = window.getComputedStyle(bloc_menu_display);
    let display_style = computed_style.getPropertyValue('display');


        if (event.target.tagName !== 'a' && event.target.tagName !== 'button' && display_style ==='flex') {
            bloc_menu_display.style.display = 'none';
        }
})



