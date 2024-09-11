const departments=document.querySelectorAll('.department')
const adminOpener=document.querySelectorAll('.adm-position')
const adminContent=document.querySelectorAll('main-adm')
const titles=document.querySelectorAll('.department-title')

adminOpener.forEach(adm=>{
    adm.addEventListener('click',()=>{
        if(adm.parentElement.classList.contains("opened")){
            adm.parentElement.classList.remove("opened")
        }else{
            adm.parentElement.classList.toggle("viewing")
        }
            
            

    })
})


  
const observer=new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
            entry.target.classList.toggle("sliding",entry.isIntersecting)
            if(entry.isIntersecting)observer.unobserve(entry.target)
    })
},
{
    //the percentage of intersection at which the show class
    //becomes toggled.The effect occurs only after 95 percent 
    //of the target element is on screen
    threshold:0.55,

    //the animation will happen 40px outside the screen
    //the viewport is theoretically expanded by 40 px on both 
    //sides
    rootMargin:"10px"
})


departments.forEach(department=>{
    observer.observe(department)
})




const colourer=new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
            entry.target.classList.toggle("coloured-title",entry.isIntersecting)
            // if(entry.isIntersecting)observer.unobserve(entry.target)
    })
},
{
    //the percentage of intersection at which the show class
    //becomes toggled.The effect occurs only after 95 percent 
    //of the target element is on screen
    threshold:0.9,

    //the animation will happen 40px outside the screen
    //the viewport is theoretically expanded by 40 px on both 
    //sides
    rootMargin:"10px"
})


titles.forEach(title=>{
    colourer.observe(title)
})

const teacher_container = [...document.querySelectorAll('.teacher-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

teacher_container.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
        console.log("next")
    })

    nxtBtn[i].addEventListener('click', () => {
        console.log("Next button clicked");
        console.log("Before scroll:", item.scrollLeft);
        item.scrollLeft += containerWidth;
        console.log("After scroll:", item.scrollLeft);
    });
    

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
        console.log("PRE")
    })
})





teacher_container.forEach(t=>{
    observer.observe(t)
})


  


   