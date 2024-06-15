/* SLIDE ANIMATION */
document.addEventListener('DOMContentLoaded', (event) => {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__slideInUp');
                observer.unobserve(entry.target);
            }
        });
    });

    const elements = document.querySelectorAll('.animate-on-scroll');
    elements.forEach(element => {
        observer.observe(element);
    });
});
/* SLIDE SECTION */
$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
});
/* SCROLL SECTION */
document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector('.scroll-container');
    const cards = Array.from(document.querySelectorAll('.card'));

    let isDown = false;
    let startX;
    let scrollLeft;

    cards.forEach(card => {
        container.appendChild(card.cloneNode(true));
    });

    container.addEventListener('mousedown', (e) => {
        e.preventDefault(); 
        isDown = true;
        container.classList.add('active');
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    });

    container.addEventListener('mouseleave', () => {
        isDown = false;
        container.classList.remove('active');
    });

    container.addEventListener('mouseup', () => {
        isDown = false;
        container.classList.remove('active');
    });

    container.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();

        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 1.5; 

        container.scrollLeft = scrollLeft - walk;
    });

    container.addEventListener('scroll', () => {
        if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
            container.scrollLeft = 0;
        }
    });
});