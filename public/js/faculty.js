const departments=document.querySelectorAll('.department')
const adminOpener=document.querySelectorAll('.adm-position')
const adminContent=document.querySelectorAll('main-adm')
const cards=document.querySelectorAll('.cards')
const individualCards=document.querySelectorAll('.card')
adminOpener.forEach(adm=>{
    adm.addEventListener('click',()=>{
        if(adm.parentElement.classList.contains("opened")){
            adm.parentElement.classList.remove("opened")
        }else{
            adm.parentElement.classList.toggle("viewing")
        }
            
            

    })
})


    

let playState=["paused","running"]
let playTime=[700,3500]

// console.log(playState[1])


    cards.forEach(card=>{
        let t=1 
        player()  
       function player(){
        if(t==0){
            t++
        }
        else if(t==1){
            t--
        }
        setTimeout(()=>{
                card.style.animationPlayState=playState[t] 
               
                    player()
                
        },playTime[t])
       }
    }) 





const observer=new IntersectionObserver(entries=>{
    entries.forEach(entry=>{
            entry.target.classList.toggle("sliding",entry.isIntersecting)
            // if(entry.isIntersecting)observer.unobserve(entry.target)
    })
},
{
    //the percentage of intersection at which the show class
    //becomes toggled.The effect occurs only after 95 percent 
    //of the target element is on screen
    threshold:0.65,

    //the animation will happen 40px outside the screen
    //the viewport is theoretically expanded by 40 px on both 
    //sides
    rootMargin:"10px"
})


departments.forEach(department=>{
    observer.observe(department)
})



  


   