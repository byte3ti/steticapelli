const scrollRevealTop = ScrollReveal({
  origin: 'top',
  distance: '100px',
  duration: 2000,
  reset: true,
  
})

scrollRevealTop.reveal('.home, .img2', { interval: 300 });

//////////////////////////////////////////////////////

const scrollRevealLeft = ScrollReveal({
  origin: 'bottom',
  distance: '100px',
  duration: 2000,
  reset: true,
 
  
 
})

scrollRevealLeft.reveal('.section1', { interval: 300 });


const scrollRevealFixed = ScrollReveal({
  origin: 0,
  distance: 0,
  duration: 2000,
  reset: true,
  delay: 300,
  
})

scrollRevealFixed.reveal('.text1, .text2, .impHor, .impCap, .text3' , { interval: 300 });

const scrollRevealScale = ScrollReveal({
  origin: 0,
  distance: 0,
  duration: 2000,
  reset: true,
  scale: 0
  
 
})

scrollRevealScale.reveal('.img1, video', { interval: 300 });

