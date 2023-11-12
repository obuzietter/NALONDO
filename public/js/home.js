const counters = document.querySelectorAll(".count");
const speed = 64;
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                startCount()
            }
        });
    },
    {
        threshold: 1,
    }
);
counters.forEach((counter) => {
    observer.observe(counter);
});


function startCount() {
    counters.forEach((counter) => {
        const updateCount = () => {
            const target = parseInt(+counter.getAttribute("data-target"));
            const count = parseInt(+counter.innerText);
            const increment = Math.trunc(target / speed);
            // console.log(increment);

            if (count < target) {
                counter.innerText = count + increment;
                setTimeout(updateCount, 1);
            } else {
                count.innerText = target;
            }
        };
        updateCount();
    });
}

const observerItems = document.querySelectorAll(".ob");
const animationObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting){

                entry.target.style.transform = "translateX(0)"
            }
            else{
                entry.target.style.transform = "translateX(50%)";
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

document.getElementById("btn").addEventListener("click", ()=>{
    location.href = "/about"
})