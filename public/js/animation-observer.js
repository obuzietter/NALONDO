const observerItems = document.querySelectorAll(".aob");
const animationObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting){

                entry.target.style.transform = "translate(0, 0)"
                
                entry.target.style.opacity = "1";
            }
            else{
                
                entry.target.style.transform = "translate(-100%, -3rem)";
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