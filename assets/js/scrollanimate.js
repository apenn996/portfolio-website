//for activating 'show' 
function reveal() {
    var reveals = document.querySelectorAll(".show");


    var arrow = document.getElementsByClassName('scrollarrow');
    for (var i = 0; i < arrow.length; i++) {
       arrow[i].style.visibility = "hidden"; // or
        arrow[i].style.display = "none"; // depending on what you're doing
    }


  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 50;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
        reveals[i].classList.remove("active");
    }
  }
}

//loadscreen
function downLoad() {
    if (document.all) {
        window.scrollTo(0, 0);
        document.all["layer1"].style.visibility = "hidden";
        document.all["layer2"].style.visibility = "visible";
    } else if (document.getElementById) {
        window.scrollTo(0, 0);
        node = document.getElementById("layer1").style.visibility = 'hidden';
        node = document.getElementById("layer2").style.visibility = 'visible';
    }
}
//progress bar 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
//scroll to top of page
window.onbeforeunload = function () {
  //  window.scrollTo(0, 0);
   
}

//'reveal' function call on scroll
window.addEventListener("scroll", reveal);
//move objects on scroll


let tl = gsap.timeline({
    
    scrollTrigger:{
        trigger: '#window', 
        
                    
        pin: true,
        start: '+=0 top', 
        end: '+=2000', 
        scrub: .6, 
        
    }
})
let wtl1 = gsap.timeline({
    scrollTrigger:{
        trigger: '#wc1',
        start:' +=200 center', 
              
        
    }
    
})
let wtl2 = gsap.timeline({
    scrollTrigger:{
        trigger: '#wc2',
        start:' +=500 center', 
       
        
        
    }
    
})
let wtl3 = gsap.timeline({
    scrollTrigger:{
        trigger: '#wc3',
        start:' +=500 center', 
       
        
        
    }
    
})
let wtl4 = gsap.timeline({
    scrollTrigger:{
        trigger: '#wc4',
        start:' +=500 center', 
       
        
        
    }
    
})



//animate window size and containers opacity
tl.to('#window', {scale: 4.5, duration: 14})
.to('#window', {autoAlpha: 0, display:"none", duration: .1})
// wtl1.to('#wc1', {autoAlpha: 1})
// wtl2.to('#wc2', {autoAlpha: 1})
// wtl3.to('#wc3', {autoAlpha: 1})
// wtl4.to('#wc4', {autoAlpha: 1})
//smooth scroll
const lenis = new Lenis()

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}
requestAnimationFrame(raf)

// side scrolling skills
addAnimation();
function addAnimation() {
  const scrollers = document.querySelectorAll(".scroller");

    scrollers.forEach((scroller) => {
        const scrollerInner = scroller.querySelector(".scroller-inner");
        const scrollerContent = Array.from(scrollerInner.children);
      scrollerContent.forEach((item) => {
        const duplicatedItem = item.cloneNode(true);
        duplicatedItem.setAttribute("aria-hidden", true);
        scrollerInner.appendChild(duplicatedItem);
        //console.log(duplicatedItem);
      });
    });
  }



  function openResume(){
    window.open('../assets/files/austinpennartzResumeL.pdf').focus();
  }
  function gotoContact(){
    var scrollLocation = document.querySelector('#wc4');
    scrollLocation.scrollIntoView();
    // alert('Your message has been sent!');

}
  function contactRecieved(){
    alert('Your message has been sent successfully!');
    
}