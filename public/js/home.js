// IntersectionObserver options
const observerOptions = {
    root: null, // Use the viewport as the root
    threshold: 0.5 // Trigger when 50% of the element is visible
};

// Counter function
function animateCounter(element) {
    const target = +element.getAttribute('data-target'); // Get target number from data-target attribute
    const speed = 200; // Adjust speed here (smaller number = faster)

    const updateCount = () => {
        const current = +element.innerText;
        const increment = target / speed;

        if (current < target) {
            element.innerText = Math.ceil(current + increment);
            setTimeout(updateCount, 10); // Adjust delay for smoother animation
        } else {
            element.innerText = target;
        }
    };

    updateCount();
}

// IntersectionObserver callback function
const callback = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const counter = entry.target.querySelector('.count');
            animateCounter(counter);
            observer.unobserve(entry.target); // Stop observing once animated
        }
    });
};

// Create a new observer
const observer = new IntersectionObserver(callback, observerOptions);

// Observe each element with the class 'ob'
document.querySelectorAll('.ob').forEach(counter => {
    observer.observe(counter);
});
