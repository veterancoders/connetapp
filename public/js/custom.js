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

document.getElementById("svgObject").addEventListener("load", function () {
    // Get the SVG document
    var svgDoc = document.getElementById("svgObject").contentDocument;

    // Select the specific path to animate
    var pathToAnimate = svgDoc.querySelector("path[stroke='#FF8F47']"); // Select by attribute

    // Get the length of the path
    var pathLength = pathToAnimate.getTotalLength();

    // Set up the path's initial state
    pathToAnimate.style.strokeDasharray = pathLength;
    pathToAnimate.style.strokeDashoffset = pathLength;

    // GSAP animation to draw the path
    gsap.to(pathToAnimate, {
      duration: 2, // Duration of the drawing animation
      strokeDashoffset: 0,
      repeat: -1, // Infinite repeat
      yoyo: true, // Reverse the animation back to the start
      ease: "power1.inOut" // Easing function
    });
  });