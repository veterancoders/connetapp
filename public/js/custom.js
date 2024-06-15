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

document.getElementById("svgObject").addEventListener("load", function() {
    // Get the SVG document
    var svgDoc = document.getElementById("svgObject").contentDocument;
    
    // Select all paths within the SVG
    var paths = svgDoc.querySelectorAll("path");

    // GSAP animation to fade paths in a loop
    gsap.to(paths, {
      duration: 1, // Duration of each fade animation
      opacity: 0, // Fade out
      stagger: 0.2, // Stagger animation between paths
      repeat: -1, // Infinite repeat
      yoyo: true, // Reverse the animation back to the start
      ease: "power1.inOut" // Easing function
    });
  });