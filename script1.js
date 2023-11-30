const wrapper2=document.querySelector('.wrapper2');
// const donation=document.querySelector('.donation');
// const resived=document.querySelector('.resived');
const events=document.querySelector('.events');
const help=document.querySelector('.help');
const profile=document.querySelector('.b0');
// const dono=document.querySelector('.b1');
// const resive=document.querySelector('.b2');
const event=document.querySelector('.b3');
const Help=document.querySelector('.b4');




profile.addEventListener('click',()=>{
    wrapper2.classList.add('active-popup');
})
// dono.addEventListener('click',()=>{
//     wrapper2.classList.remove('active-popup');
// })
// dono.addEventListener('click',()=>{
//     donation.classList.add('active');
// })
// dono.addEventListener('click',()=>{
//     resived.classList.remove('active');
// })
// dono.addEventListener('click',()=>{
//     events.classList.remove('active');
// })
// dono.addEventListener('click',()=>{
//     help.classList.remove('active');
// })
// profile.addEventListener('click',()=>{
//     donation.classList.remove('active');
// })
// resive.addEventListener('click',()=>{
//     donation.classList.remove('active');
// })
// resive.addEventListener('click',()=>{
//     wrapper2.classList.remove('active-popup');
// })
// resive.addEventListener('click',()=>{
//     resived.classList.add('active');
// })
// resive.addEventListener('click',()=>{
//     events.classList.remove('active');
// })
// resive.addEventListener('click',()=>{
//     help.classList.remove('active');
// })
// profile.addEventListener('click',()=>{
//     resived.classList.remove('active');
// })
profile.addEventListener('click',()=>{
    events.classList.remove('active');
})
profile.addEventListener('click',()=>{
    help.classList.remove('active');
})
event.addEventListener('click',()=>{
    events.classList.add('active');
})
// event.addEventListener('click',()=>{
//     resived.classList.remove('active');
// })
event.addEventListener('click',()=>{
    wrapper2.classList.remove('active-popup');
})
// event.addEventListener('click',()=>{
//     donation.classList.remove('active');
// })
event.addEventListener('click',()=>{
    help.classList.remove('active');
})
Help.addEventListener('click',()=>{
    help.classList.add('active');
})
Help.addEventListener('click',()=>{
    wrapper2.classList.remove('active-popup');
})
// Help.addEventListener('click',()=>{
//     donation.classList.remove('active');
// })
// Help.addEventListener('click',()=>{
//     resived.classList.remove('active');
// })
Help.addEventListener('click',()=>{
    events.classList.remove('active');
})

