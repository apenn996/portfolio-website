
function updateLights(){
    var grid = document.getElementById('flashing-grid');
    var gridSmall = document.getElementById('flashing-grid-small');
    var gridSmallLights = gridSmall.getElementsByTagName("div");
    var gridLights = grid.getElementsByTagName("div");
    let colors = ["red", "blue", "white"];
    var randum = function (max) {
    return Math.round(Math.random() * max);
    }
    
 
    for(var i=0; i< gridLights.length; i++){

        gridLights[i].style.backgroundColor = "rgb(5,5,5)";
        
    }
    for(var i=0; i<  gridSmallLights.length; i++){

        gridSmallLights[i].style.backgroundColor = "rgb(5,5,5)";
        
    }
    
    for(var i=0; i< 3; i++){
        gridLights[randum(17)].style.backgroundColor = colors[randum(2)];  
    }
    gridSmallLights[randum(2)].style.backgroundColor = "DarkGoldenRod";
}
//dancing-bars
let b1tl = gsap.timeline({
    
})
let b2tl = gsap.timeline({
    
})
let b3tl = gsap.timeline({
    
})
let b4tl = gsap.timeline({
    
})


function updateBars(){
    var bars = document.getElementsByClassName('dancing-bars');

    var randum = function (max) {
        return Math.round(Math.random() * max);
    }
    var myrand = randum(80);
    for(var i=0; i< bars.length; i++){
        
        
        b1tl.to('#b1',{ height: randum(180) }) 
        b2tl.to('#b2',{ height: randum(180) }) 
        b3tl.to('#b3',{ height: randum(180) }) 
        b4tl.to('#b4',{ height: randum(180) }) 
    }

  

}

var updateInterval = setInterval(function () {
   updateLights();
}, 1000);

var updateInterval = setInterval(function () {  
   updateBars()
}, 500);


//terminal animations
let diagnosticTypetl = gsap.timeline({})
let messageTypetl = gsap.timeline({})
let boottl = gsap.timeline({})

var selectionScreen = document.getElementById('selection-screen');
var diagnosticScreen = document.getElementById('diagnostic-screen');
var messageScreen = document.getElementById('message-screen');


function selectionScreenF(){
    

    selectionScreen.style.visibility = "visible";
    selectionScreen.style.display = "block";
    diagnosticScreen.style.visibility = "hidden";
    diagnosticScreen.style.display = "none";
    messageScreen.style.visibility = "hidden";
    messageScreen.style.display = "none";
}
function diagnosticScreenF(){
   
    selectionScreen.style.visibility = "hidden";
    selectionScreen.style.display = "none";
    diagnosticScreen.style.visibility = "visible";
    diagnosticScreen.style.display = "block";
    messageScreen.style.visibility = "hidden";
    messageScreen.style.display = "none";
}
function messageScreenF(){
  
    selectionScreen.style.visibility = "hidden";
    selectionScreen.style.display = "none";
    diagnosticScreen.style.visibility = "hidden";
    diagnosticScreen.style.display = "none";
    messageScreen.style.visibility = "visible";
    messageScreen.style.display = "block";
}

function boot(){
    var retroGrids = document.getElementsByClassName('retro-grid');
    var retroWelcome = document.getElementById('retro-welcome');
    var retroOpen = document.getElementById('path');
    var retroOpenContainer = document.getElementsByClassName('retro-open');


    
    
        boottl.to(retroOpenContainer[0], {force3D: true, duration: 3, z: 90, ease: SteppedEase.config(30)}, 0)
        .to(retroOpen, {force3D: true, strokeDashoffset: 0, duration: 3, ease: SteppedEase.config(30)}, 0)
        .to(retroOpen, {autoAlpha: 0}, 2.3)
        .fromTo(retroGrids[0], 5,{autoAlpha: 0, force3D: true ,rotateX: 90, scale: 1, y: -100, z: -400}, {autoAlpha: 1,force3D: true, rotateX: 90, scale: 5, y: -100, z: 1650, ease: SteppedEase.config(80) }, 2)
        .fromTo(retroGrids[1], 5,{ autoAlpha: 0,force3D: true ,rotateX: 90, scale: 1, y:-50, z: -400}, {  autoAlpha: 1,force3D: true, rotateX: 90, scale: 5, y:-50, z: 1650, ease: SteppedEase.config(80)}, 2)
        .to(retroWelcome, {autoAlpha: 1, ease: SteppedEase.config(15), duration: 2}, 6.4)
        .to(retroWelcome, {autoAlpha: 0, ease: SteppedEase.config(15), duration: 1}, 9.5)
        .to(selectionScreen, {autoAlpha: 1,  duration: 1, ease: SteppedEase.config(1)}, 10.5)
        
}
function diagnostic(){
    
    diagnosticScreenF();
    
    diagnosticTypetl.restart();
    diagnosticTypetl.play();
    var typeDlines = document.getElementsByClassName('type-d');
    var loadlines = document.getElementsByClassName('load');
    for(var i=0; i< typeDlines.length; i++){

        typeDlines[i].style.width = 0;
        
        
    }
    for(var i=0; i< loadlines.length; i++){

        loadlines[i].style.width = 0;
        
        
    }
   
    //object, duration, after, offset
    diagnosticTypetl.to(typeDlines[0], 1, {width: '100%', ease: SteppedEase.config(27)}, 0)
    .to(loadlines[0], 1, {width: '15%', repeat: 6,  ease: SteppedEase.config(5)}, 1)
    .to(typeDlines[2], .5, {width: '100%', ease: SteppedEase.config(19)}, 8.5)
    .to(typeDlines[3], .5, {width: '100%', ease: SteppedEase.config(19)}, 9)
    .to(typeDlines[4], .5, {width: '100%', ease: SteppedEase.config(19)}, 10)
    .to(typeDlines[6], 1,{width: '100%', ease: SteppedEase.config(24)}, 13)
    .to(typeDlines[7], 1, {width: '100%', ease: SteppedEase.config(25)}, 15)
    .to(typeDlines[9], 1, {width: '100%', ease: SteppedEase.config(29)}, 17)
    .to(typeDlines[10], 1, {width: '100%', ease: SteppedEase.config(19)}, 19)
    .fromTo(typeDlines[10], 1, {opacity:1} ,{opacity:0, repeat: -1, ease: SteppedEase.config(1)}, 20.1)
}
function message(){
    
    messageScreenF();
    var messageNotifiactionNumber = document.getElementById('message-option').innerHTML = "> messages (0 new)"
    messageTypetl.restart();
    messageTypetl.play();
    var typeMlines = document.getElementsByClassName('type-m');
    
    for(var i=0; i< typeMlines.length; i++){

        typeMlines[i].style.width = 0;
        
        
    }
  
    
    //object, duration, after, offset
    messageTypetl.to(typeMlines[0], 3, {width: '100%', ease: SteppedEase.config(80)}, 0)
    
    .to(typeMlines[1], 3, {width: '100%', ease: SteppedEase.config(80)}, 3.1)
    .to(typeMlines[2], 3, {width: '100%', ease: SteppedEase.config(80)}, 6.1)
    .to(typeMlines[3], 3, {width: '100%', ease: SteppedEase.config(80)}, 9.1)
    .to(typeMlines[4], 3, {width: '100%', ease: SteppedEase.config(80)}, 12.1)
    .to(typeMlines[5], 3,{width: '100%', ease: SteppedEase.config(80)}, 15.1)
    .to(typeMlines[6], 3,{width: '100%', ease: SteppedEase.config(80)}, 18.1)

}
    async function on() {
       
        selectionScreenF();
      
       
        diagnosticTypetl.clear(true);
        diagnosticTypetl.pause(0);
        boottl.restart();
         power();
        boot();
    }
    
    /** Turn off the terminal */
    function off() {
        
        power(false);
    }
    
    async function power(on = true) {
        // @FIXME use a single class on the #monitor to detect on/off
      
        
      
        document.getElementById("monitor").classList.toggle("turn-off", on);
        document.getElementById("monitor").classList.toggle("off", !on);
        
        return;
    }
    function togglePower() {
        let isOff = document.getElementById("monitor").classList.contains("off");
        if (isOff) {
            document.getElementById('power-button').classList.add("focused");
    
            on();
        } else {
            document.getElementById('power-button').classList.remove("focused");
            off();
        }
    }

    