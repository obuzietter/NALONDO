const contacts=document.querySelectorAll('.contact-info')
const googleMap=document.querySelector('.google-map')
const map=document.querySelector('.map')



    googleMap.addEventListener('load',()=>{
        map.classList.add('show')
        // console.log("clicked")
    })






const observer=new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
            entry.target.classList.toggle("showing",entry.isIntersecting)
            if(entry.isIntersecting)observer.unobserve(entry.target)
    })
},
{
    //the percentage of intersection at which the show class
    //becomes toggled.The effect occurs only after 95 percent 
    //of the target element is on screen
    threshold:0.95,

    //the animation will happen 40px outside the screen
    //the viewport is theoretically expanded by 40 px on both 
    //sides
    rootMargin:"10px"
})


contacts.forEach(contact=>{
    observer.observe(contact)
})



  


   