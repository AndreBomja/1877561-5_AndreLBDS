var swiper = new Swiper('.swiper', {
    slidesPerView: 5,
    autoplay: true,
    spaceBetween: 90,
    slidesPerGroup: 1,
    slidesPerGroupSkip: 4,
    effect: "slide",
    cubeEffect: false,
    coverflowEffect: true,
    speed: 1000,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: false,
    grabCursor: 'true',
    breakpoints: {
        981: {
            slidesPerView: 5,
            spaceBetween: 60,
            slidesPerGroup: 1,
            slidesPerGroupSkip: 4,
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 10,
            slidesPerGroup: 1,
            slidesPerGroupSkip: 4,
        },
        0: {
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1,
            slidesPerGroupSkip: 0,
        }
    }
});




document.addEventListener('DOMContentLoaded', () => {

    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(el => {
            el.addEventListener('click', () => {

                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }

});

function validar_active() {

    // Get the container element
    var btnContainer = document.getElementById("btn-menu");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("btn");

    console.log(btns)

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");

            // If there's no active class
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }

            // Add the active class to the current/clicked button
            this.className += " active";
        });
    }
}
validar_active()