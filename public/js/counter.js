

const observerItems = document.querySelectorAll(".counters");
const animationObserver = new IntersectionObserver(
    (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                let teacher = setInterval(teacherCount, 200)
                let count1 = 1
                
                function teacherCount() {
                
                    document.querySelector('#teachers').innerHTML = count1
                    count1++
                    if (count1 > 32) {
                        clearInterval(teacher)
                    }
                }
                
                let student = setInterval(studentCount, 8)
                let count2 = 1
                
                function studentCount() {
                
                    document.querySelector('#students').innerHTML = count2
                    count2++
                    if (count2 > 662) {
                        clearInterval(student)
                    }
                }
                
                let candidate = setInterval(candidateCount, 40)
                let count3 = 1
                
                function candidateCount() {
                
                    document.querySelector('#candidates').innerHTML = count3
                    count3++
                    if (count3 > 163) {
                        clearInterval(candidate)
                    }
                }
                
                // Stop observing this element once it's visible
                observer.unobserve(entry.target);
            } 
        });
    },
    {
        threshold: 0.1,
    }
);

observerItems.forEach((counter) => {
    animationObserver.observe(counter);
});



