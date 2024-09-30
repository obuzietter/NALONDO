
const contacts = document.querySelectorAll('.contact-info');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        console.log(entry.target, entry.isIntersecting); // Log target and intersection status
        if (entry.isIntersecting) {
            entry.target.classList.add("showing");
        }
    });
}, {
    threshold: 0.1 // Test with a lower threshold
});

// Observe each contact-info element
contacts.forEach(contact => {
    observer.observe(contact);
});


