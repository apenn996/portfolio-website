function setTheme(themeName) {
    localStorage.setItem('theme', themeName);
    document.documentElement.className = themeName;
}

function getRotation() {

   
}



function stars() {
    if (localStorage.getItem('theme') === 'theme-light') {
        var starsgroup = document.getElementsByClassName('stars');
        for (var i = 0; i < starsgroup.length; i++) {
            starsgroup[i].style.visibility = "hidden"; // or
            starsgroup[i].style.display = "none"; // depending on what you're doing
        }
    } else {
        var starsgroup = document.getElementsByClassName('stars');
        for (var i = 0; i < starsgroup.length; i++) {
            starsgroup[i].style.visibility = "visible"; // or
            starsgroup[i].style.display = "block"; // depending on what you're doing
        }

    }
}

function themeSwap() {
    let current_rotation = 0;
let current_icon_translate = 0;

    if (document.documentElement.className === 'theme-dark') {
        document.getElementById('ThemeIcon').className = 'gg-sun';
    }
    else {
        document.getElementById('ThemeIcon').className = 'gg-moon';
    }
   
     if(localStorage.getItem('theme') === 'theme-dark') {
         setTheme('theme-light');
         stars();
           
         current_rotation += 180;

         if (current_icon_translate == 0) {
             current_icon_translate = -38;
         }
         else {
             current_icon_translate = 0;
         }
         
        
         document.getElementById('pbg').style.transform = 'rotate(' + current_rotation + 'deg)';
         document.getElementById('ThemeIcon').style.transform = 'translateX(' + current_icon_translate + 'px)';
     } else {
            setTheme('theme-dark');
         stars();
         current_rotation += 180;

         if (current_icon_translate == -38) {
             current_icon_translate = 0;
         }
         else {
             current_icon_translate = -38;
         }

        
         document.getElementById('pbg').style.transform = 'rotate(' + current_rotation + 'deg)';
         document.getElementById('ThemeIcon').style.transform = 'translateX(' + current_icon_translate + 'px)' + ' rotate(' + -120 + 'deg)';
        // document.getElementById('ThemeIcon').style.transform = 'rotate(' + -90 + 'deg)';
     }


}


    (function () {
        if (localStorage.getItem('theme') === 'theme-dark') {
           
            setTheme('theme-dark');
            stars();
            document.getElementById('ThemeIcon').className = 'gg-moon';
            document.getElementById('ThemeIcon').style.transform = 'translateX(' + current_icon_translate + 'px)' + ' rotate(' + -120 + 'deg)';
        } else {
            
            setTheme('theme-light');
            stars();
            document.getElementById('ThemeIcon').className = 'gg-sun';
            
        }
        
})();


