// Slideshow functionality
const slideshow = document.querySelector('.slideshow');
const images = document.querySelectorAll('.slideshow img');
const leftArrow = document.querySelector('.arrow.left');
const rightArrow = document.querySelector('.arrow.right');

let index = 0;
let interval;

// Function to update the transform style based on the current index
function updateSlideshow() {
    const offset = -index * 100;
    slideshow.style.transform = `translateX(${offset}%)`;
}

// Move to the previous image
leftArrow.addEventListener('click', () => {
    index = (index === 0) ? images.length - 1 : index - 1;
    updateSlideshow();
    resetAutoScroll(); // Reset the auto-scroll timer
});

// Move to the next image
rightArrow.addEventListener('click', () => {
    index = (index === images.length - 1) ? 0 : index + 1;
    updateSlideshow();
    resetAutoScroll(); // Reset the auto-scroll timer
});

// Auto-scroll functionality
function startAutoScroll() {
    interval = setInterval(() => {
        index = (index + 1) % images.length; // Loop back to the start after the last image
        updateSlideshow();
    }, 5000); // Change images every 5 seconds
}

// Reset auto-scroll timer when a manual action occurs
function resetAutoScroll() {
    clearInterval(interval);
    startAutoScroll();
}

// Start auto-scrolling when the page loads
startAutoScroll();

// Expandable sections functionality
document.querySelectorAll('.expandable').forEach(function(expandable) {
    expandable.addEventListener('click', function() {
        const content = this.nextElementSibling;
        content.classList.toggle('show'); // Přepínání viditelnosti obsahu
        this.classList.toggle('active'); // Otočení šipky
    });
});


// Scroll to different sections
function scrollToEuthanasia() {
    document.getElementById('euthanasia').scrollIntoView({
        behavior: 'smooth'
    });
}

function scrollToPrevence() {
    document.getElementById('prevence').scrollIntoView({
        behavior: 'smooth'
    });
}

function scrollToAparat() {
    document.getElementById('aparat').scrollIntoView({
        behavior: 'smooth'
    });
}
