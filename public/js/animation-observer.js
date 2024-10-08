const observerItems = document.querySelectorAll(".aob");
const animationObserver = new IntersectionObserver(
    (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.transform = "translate(0, 0)";
                entry.target.style.opacity = "1";

                // Stop observing this element once it's visible
                observer.unobserve(entry.target);
            } else {
                entry.target.style.transform = "translate(-50%, -3rem)";
                entry.target.style.opacity = "0";
            }
        });
    },
    {
        threshold: 0.1,
    }
);

observerItems.forEach((ob) => {
    animationObserver.observe(ob);
});
