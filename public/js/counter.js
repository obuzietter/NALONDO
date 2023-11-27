let teacher = setInterval(teacherCount, 200)
let count1 = 1

function teacherCount() {

    document.querySelector('#teachers').innerHTML = count1
    count1++
    if (count1 > 32) {
        clearInterval(teacher)
    }
}

let student = setInterval(studentCount, 10)
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

// let c = document.querySelectorAll('.count')
// c.forEach((counter) => {
//     let stat = setInterval(updateCount, 10)
//     let count = 1

//     function updateCount() {

//         counter.innerHTML = count
//         count++
//         if (count > counter.getAttribute('data-target')) {
//             clearInterval(stat)
//         }
//     }
// })



