




<?php
	echo '<!DOCTYPE HTML>
    <html class="theme-light">
    
    <head>
        <link rel="icon" href="assets/images/AT.png" type="image/x-icon">
        <title> Austin Pennartz </title>
        <meta charset="utf-8" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Lato:wght@100&family=VT323&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="assets/css/icons.css">
        <link rel="stylesheet" href="assets/css/theme.css">
      
        <link rel="stylesheet" href="assets/css/stars.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/space.css">
        <style>
            /* * {
                  border: 1px solid red;
              }
                 */
        </style>
    
    </head>
    
    <body onload="downLoad()">
       
    
        <div id="layer1" style="position: fixed; width: 100%; height: 100%; z-index: 999; background: black;">
            <div class="moonloader">
                <div class="disc"></div>
            </div>
        </div>
    
        <div style="overflow: hidden; width: 100vw; right: 0px; height: 215vh; position: absolute;">
            <img id="earth" src="assets/images/tinified/e-min.jpg" alt="earth image" />
        </div>
    
        <div class="progressBarContainer">
    
            <div class="progressBar" id="myBar"></div>
        </div>
    
        <div class="TopBannerContainer" >
            <!-- stars, disabled for performance 
                <div class="s3"></div> -->
    
    
            <div class="coverContainer" style="z-index: 2;">
                <div id="flashing-light">
                    <div id="light-glare"></div>
                </div>
                <div id="monitor-grid-section">
                    <div class="monitor-panel">
                        <div id="monitor" class="off">
                            <div id="crt">
                                <div class="boot-screen">
                                    <div class="retro-open">
                                        <svg width="639" height="411" viewBox="0 0 639 411" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g filter="url(#filter0_f_1_2)">
                                                <path id="path" d="M34 38L92 30L168 23L243 18L318 16L395.5 19.5L473 23L539.5 30.5L606 38L618 121L622.5 205.5L618 290L611.5 
                                                    331.5L606 373L535.5 380.5L465.5 386.5L391.5 392L318 395L243 392L173.5 386.5L102 380.5L34 373L26.5 331.5L21.5
                                                     290L16 205.5L21.5 121L34 38Z" stroke="#87D18B" stroke-width="23"
                                                    stroke-miterlimit="2.2042" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_f_1_2" x="0.475677" y="0.493073" width="637.541"
                                                    height="410.016" filterUnits="userSpaceOnUse"
                                                    color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                        result="shape" />
                                                    <feGaussianBlur stdDeviation="2" result="effect1_foregroundBlur_1_2" />
                                                </filter>
                                            </defs>
                                        </svg>
    
                                    </div>
    
                                    <div class="retro-grid">
                                        
                                        <div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div> <div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div>
                                       
                                        
                                        
                                       
                                      
                                        
                                    
                                    </div>
                                    <div class="retro-grid" style="top: -450px">
                                       <div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div> <div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div><div></div><div></div> <div></div><div></div><div></div> <div></div>  <div></div><div></div>
                                    </div>
                                    <div id="retro-welcome">
                                        <img src="assets/images/globep.png"> </img>
                                        <h1 class="retro-title">Travel Industries</h2>
                                    </div>
                                </div>
                                <div id="selection-screen">
    
    
                                    <div id="message-option" class="VT323 selection-option" onclick="message()">> Messages
                                        (1 new)</div>
                                    <div class="VT323 selection-option" onclick="diagnostic()">> Run Diagnostic</div>
                                </div>
                                <div class="VT323" id="terminal">
    
                                    <div id="message-screen">
                                        <button class="back-button" onclick="selectionScreenF()">
                                            <img src="assets/images/backarrow.png"> </img>
                                        </button>
                                        <div class="type-m">Hey! You just got hit pretty good by some space junk. </div>
    
                                        <div class="type-m">It looks like your craft had its wing smashed right off! It    </div>
                                        <div class="type-m">wouldn\'t suprise me if your systems were going haywire right  </div>
                                        <div class="type-m">about now. Try running a system diagnostic by using the     </div>
    
                        
                                        <div class="type-m"><span>back arrow</span> in the top left of the screen, and clicking on   </div>
    
                                        <div class="type-m">run diagnostic. You could also find the exit hatch <span>down below</span> </div>
                                        <div class="type-m"> and asses the damage yourself.</div>
                                      
                                    </div>
    
                                    <div id="diagnostic-screen">
                                        <button class="back-button" onclick="selectionScreenF()">
                                            <img src="assets/images/backarrow.png"> </img>
                                        </button>
                                        <div id="1as" class="type-d">Running System Diagnostic </div>
                                        <div class="load">....</div>
                                        <div class="type-d">--BLANK1--</div>
                                        <div class="type-d">Power: Low</div>
                                        <div class="load">....</div>
                                        <div class="type-d">Communications: Unresponsive</div>
                                        <div class="type-d">Ship Integrity: Compromised </div>
                                        <div class="type-d">--BLANK5--</div>
                                        <div class="type-d">Assessement: <span style="color: red">Critical Failure</span>
                                        </div>
                                        <div class="type-d">Source: exterior damage</div>
                                        <div class="type-d">--BLANK8--</div>
                                        <div class="type-d">Suggested course of action: <span
                                                style="color: #034eff">Spacewalk</span> </div>
                                        <div class="type-d">Exit hatch opened</div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <div class="control-panel">
                            <button id="power-button" onclick="togglePower()">
                                <img src="assets/images/power.png"> </img>
                            </button>
                        </div>
    
                    </div>
                </div>
                <div class="malfunctioning-systems">
                    
                    <div id="flashing-grid">
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                    </div>
                    <div id="flashing-grid-small">
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                        <div class="grid-light"></div>
                      
                    </div>
                    <div style="display: flex; flex-direction: row; justify-content: space-between; width: 75%; margin-left: 12.5%; margin-top: 100px;">
                        <div class="dancing-bars-container">
                            <div id="b1" class="dancing-bars"></div>
                            <div id="b2" class="dancing-bars"></div>
                            <div id="b3" class="dancing-bars"></div>
                            <div id="b4" class="dancing-bars"></div>                    
                           
                        </div>
                        <div class="gauge"></div>
                    </div>
                   
                 </div>
    
    
                <!--
                <div class="titleContainer">
                    <h1 class="title show" style=" animation: lightdrop ease 2s; ">I\'m Austin.</h1>
                    <h1 class="title show" style=" animation: lightdrop ease 2.5s; ">I\'m a: 
                     <div class="BricoF rotatingWords">
                        <span >Developer.</span>
                        <span>Creator.</span>
                        <span>Coder.</span>
                        <span>Learner.</span>
                        <span>person.</span>
                     </div>
                    </h1> 
                   <h1 class="title show" style=" margin-block-start: 0em; margin-block-end: 0em; animation: lightdrop ease 2s; "> A [Blank].</h1>
                </div class="">
                <div>
    
                </div>-->
            </div> 
           
            <div id="window">
    
            </div>
    
        </div>
        <div style="display: flex; width: 100%;  overflow: hidden; justify-content:  center; top: 2247px; flex-direction:column; position: absolute; z-index: 1;">
            <img id="debris" src="assets/images/tinified/debris.png" alt="space debris" />
            <img id="debris" src="assets/images/tinified/debris2.png" alt="space debris" />
        </div>
      
        <div class="MainContentContainer" style="top: -1330px;">
           
            <div id="wc1" class="whiteContainer">
                <div><!--tabs-->
                    <div class="containerTabRight"></div>
                    <div class="containerTabLeft"></div>
                </div>
    
                <div class="corners">
                    <div class="top left"></div>
                    <div class="top right"></div>
                    <div class="bottom right"></div>
                    <div class="bottom left"></div>
                </div>
                <div class="whiteContainerContentWrapper">
                    <div class="RR">
                        <div class="whiteTitleContainer">
                            <h2 class="spaceContainer Header"> Learn About My-</h2>
                            <h3 class="BricoF spaceContainer Title"> Self</h1>
                        </div>
                        <div class=" content-description">
                            
                                <div class=" BricoF show" style=" font-size: 3em; animation: lightdrop ease 2.5s; ">Hi. I\'m Austin, a 
                                 <div class="BricoF rotatingWords">
                                    <span >Developer.</span>
                                    <span>Creator.</span>
                                    <span>Coder.</span>
                                    <span>Learner.</span>
                                    
                                 </div>
                                </div> 
                           
                            
                            <p class=" BricoF paragraph"> Welcome to my portfolio!
                                I\'m a recent computer science graduate with concentrations in: web development, software engineering, and cyber security.
                                I enjoy coding, collaborating, <i style="font-size: 1em;">(and space if it wasn\'t obvious).</i>
                                I\'m constantly learning new technologies, but you can check out what I already know below!</p>
                        </div>
    
                    </div>
    
    
                    <div class="spaceContainer BricoF content">
    
                        
                        <div class="profile-picture-container">
                            <div style="background-color: transparent; width: 422px; height: 422px; position: relative; border-radius: 90%; margin: auto; z-index: 5;">
                                <div class="ProfilePicture" id="pbg" style="background-color: #585858; width: 417px; height: 417px; margin-top: -208.5px; margin-left: -208.5px;"></div>
                                <img class="ProfilePicture" src="assets/images/tinified/coolcat.jpeg" alt="Profile Picture" style="margin-top: -193.5px; margin-left: -193.5px; " />
                                
                                <div class="geometric orbit1">
                                    <div class="orbiter1">
    
                                    </div>
                                </div>
                                <div class="geometric orbit2">
                                    <div class="orbiter2">
    
                                    </div>
                                </div>
                            </div>
                            <div><!--shapes-->
                               
                                <!-- <div class="geometric orbit3">
    
                                </div> -->
                                <div class="geometric line" style="bottom: 11px; left: 200px; transform: rotate(90deg);"> </div>
                                <div class="geometric line" style="top: 200px; right: 50px;"> </div>
                                <div class="geometric chain">
                                    <svg width="150" height="50" viewBox="0 0 350 100" fill="none">
                                        <circle cx="50" cy="50" r="49.5" stroke="black" />
                                        <circle cx="200" cy="50" r="50" fill="black" />
                                        <circle cx="150" cy="50" r="49.5" stroke="black" />
                                        <circle cx="100" cy="50" r="49.5" stroke="black" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!--<a href="projects.html">
                        <div class="smallBlock"></div>
                    </a>-->
    
                    </div>
                </div>
                
    
    
    
                
    
            </div>
            <div id="wc2" class="whiteContainer">
                <div><!--tabs-->
                    <div class="containerTabRight"></div>
                    <div class="containerTabLeft"></div>
                </div>
    
                <div class="corners">
                    <div class="top left"></div>
                    <div class="top right"></div>
                    <div class="bottom right"></div>
                    <div class="bottom left"></div>
                </div>
                <div class="whiteContainerContentWrapper">
                    <div class="RR">
                        <div>
                            <h2 class="spaceContainer Header"> Learn About My</h2>
                            <h3 class="BricoF spaceContainer Title"> Skills</h1>
                        </div>
                        <div class=" content-description" style="display: flex; flex-direction: column; justify-content: center;">
                            <p class=" BricoF paragraph"> These are some of the languages and technologies I have a solid understanding of. 
                                I\'ve completed projects using each one of them. Fortunately, several of my projects are hosted on the internet!
                               All of my projects are also on GitHub.   
                            </p>
                           <div style="display: flex;
                           flex-direction: row;
                          justify-content: space-evenly; align-items: center;">
                            <button class="button" onclick="openResume()">
                                
                                View Resume
                        </button>
                        <button class="button" onclick="gotoContact()">
                               Contact Me
                        </button>
                           </div>
                          
                        </div>
    
                    </div>
    
    
                    <div id="rotating-words-id" class="spaceContainer BricoF content">
                   
                        <h2>Front End</h2>
                        <div class="front-end scroller">
                            <ul class="tag-list scroller-inner">
                                <div class="test" style="background-image: url(assets/images/html5-icon.png); ">
                                    <span class="tooltip-text">HTML5</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/css-icon.png); ">
                                    <span class="tooltip-text">CSS3</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/javascript-icon.png); ">
                                    <span class="tooltip-text">JavaScript</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/gsap-icon.png); ">
                                    <span class="tooltip-text">GSAP</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/bootstrap-icon.png); ">
                                    <span class="tooltip-text">Bootstrap</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/wordpress-icon.png); ">
                                    <span class="tooltip-text">Wordpress</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/sass-icon.png); ">
                                    <span class="tooltip-text">Sass</span>
                                </div>
    
    
    
    
                            </ul>
                        </div>
                        <h2>Back End</h2>
    
                        <div class="back-end scroller">
                            <ul class="tag-list scroller-inner">
                                <div class="test" style="background-image: url(assets/images/php-icon.png); ">
                                    <span class="tooltip-text">PHP</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/mysql-icon.png); ">
                                    <span class="tooltip-text">MySQL</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/c-icon.png); ">
                                    <span class="tooltip-text">C</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/csharp-icon.png); ">
                                    <span class="tooltip-text">C#</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/phpmyadmin-icon.png); ">
                                    <span class="tooltip-text">phpMyAdmin</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/sql-icon.png); ">
                                    <span class="tooltip-text">SQL</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/aws-icon.png); ">
                                    <span class="tooltip-text">Amazon Web Services</span>
                                </div>
    
    
    
                            </ul>
                        </div>
                        <h2>Miscellaneous</h2>
    
                        <div class="misc scroller">
                            <ul class="tag-list scroller-inner">
                                <div class="test" style="background-image: url(assets/images/java-icon.png); ">
                                    <span class="tooltip-text">Java</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/linux-icon.png); ">
                                    <span class="tooltip-text">Linux</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/bash-icon.png); ">
                                    <span class="tooltip-text">Bash</span>
                                </div>
    
                                <div class="test" style="background-image: url(assets/images/vscode-icon.png); ">
                                    <span class="tooltip-text">VsCode</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/unity-icon.png); ">
                                    <span class="tooltip-text">Unity</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/git-icon.png); ">
                                    <span class="tooltip-text">Git</span>
                                </div>
                                <div class="test" style="background-image: url(assets/images/github-icon.png); ">
                                    <span class="tooltip-text">GitHub</span>
                                </div>
    
    
    
                            </ul>
                        </div>
    
                        <!--<a href="projects.html">
                        <div class="smallBlock"></div>
                    </a>-->
                
                    </div>
                </div>
                <div ><!--geometric shapes-->
                  <div class="geometric crossed-circle">
                    <svg width="70" height="70" viewBox="0 0 214 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="107" cy="111" r="93.5" stroke="black" stroke-width="13"/>
                        <line x1="8.59619" y1="5.40381" x2="208.596" y2="205.404" stroke="black" stroke-width="13"/>
                        <line x1="5.40381" y1="205.404" x2="205.404" y2="5.40381" stroke="black" stroke-width="13"/>
                        </svg>
                        
                  </div>
                  <div class="geometric layers">
                    <svg width="150" height="120" viewBox="0 0 200 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 29.4915L98.4772 0L200 29.4915L98.4772 60L0 29.4915Z" fill="black"/>
                        <path d="M98.4794 119.477L1.71578 89.4996L98.4793 60.5213L198.236 89.4997L98.4794 119.477Z" stroke="black"/>
                        <path d="M98.4794 89.4772L1.71578 59.4996L98.4793 30.5213L198.236 59.4997L98.4794 89.4772Z" stroke="black"/>
                        </svg>
                        
                        
                  </div>
                  <div class="geometric xBoxes">
                    <svg width="152" height="178" viewBox="0 0 152 438" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="4" width="144" height="144" stroke="black" stroke-width="6"/>
                        <line x1="1.35355" y1="0.646447" x2="151.354" y2="150.646" stroke="black"/>
                        <line x1="0.646447" y1="150.646" x2="150.646" y2="0.646449" stroke="black"/>
                        <rect x="4" y="291" width="144" height="144" stroke="black" stroke-width="6"/>
                        <line x1="1.35355" y1="287.646" x2="151.354" y2="437.646" stroke="black"/>
                        <line x1="0.646447" y1="437.646" x2="150.646" y2="287.646" stroke="black"/>
                        <rect x="4" y="148" width="144" height="144" stroke="black" stroke-width="6"/>
                        <line x1="1.35355" y1="145.646" x2="151.354" y2="295.646" stroke="black"/>
                        <line x1="0.646447" y1="295.646" x2="150.646" y2="145.646" stroke="black"/>
                        </svg>
                        
                        
                        
                  </div>
                    <!-- <div class="geometric orbit1"></div>
                    <div class="geometric orbit2"></div>
                    <div class="geometric orbit3"></div> -->
                    
                </div>
    
            </div>
    
            <div id="wc3" class="whiteContainer">
                <div><!--tabs-->
                    <div class="containerTabRight"></div>
                    <div class="containerTabLeft"></div>
                </div>
    
                <div class="corners">
                    <div class="top left"></div>
                    <div class="top right"></div>
                    <div class="bottom right"></div>
                    <div class="bottom left"></div>
                </div>
    
                <div class="RR">
                    <h2 class="spaceContainer Header"> Learn About My</h2>
                    <h1 class="BricoF spaceContainer Title"> Projects</h1>
                    <h3 class="BricoF ">More information on each project can be found on my <u><a href="https://github.com/apenn996">GitHub. </a></u></h3>
                </div>
                <div class="Content2 " style="opacity: 1; ">
    
                    <div class="ContentBlock large" style="">
                        <a href="./HotelWebsite/protoMain.php">
                            <span class="linkOverlay"> </span>
                        </a>
                        <div class="card-header">
                            <h2 class="BricoF"> Full-Stack Hotel Reservation Website </h2>
                            <ul class="languageList BricoF">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>Bootstrap</li>
                                <li>PHP</li>
                                <li>SQL</li>
                                <li>AWS</li>
                            </ul>
                        </div>
                        <img src="assets/images/tinified/fullstack-website-min.JPG">
                        
                        <p class="BricoF ">
    
                            A hotel reservation site written with PHP and Bootstrap using a LEMP web architecture where customers must create an account to reserve, delete, and update hotel reservations.
                            This website also has an employee only portal to create, delete, and update the hotel listings, reservations, and customer accounts themselves.  Mobile responsive. 
                        </p>
                    </div>
                    <div class="ContentBlock large " style="">
                        <a href="#">
                            <span class="linkOverlay"> </span>
                        </a>
                        <div class="card-header">
                            <h2 class="BricoF"> Portfolio Website </h2>
    
                            <ul class="languageList BricoF">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>GSAP</li>
                                <li>PHP</li>
                                <li>AWS</li>
                              
    
                            </ul>
                        </div>
                        <img src="assets/images/tinified/websiteThumbnail-min.JPG">
                        <p class="BricoF ">
    
                            The website you\'re currently on!
                            Written with basic HTML and CSS with animations and functionality through JS DOM
                            manipulation. This site also utilizes the LEMP stack and uses many feature of AWS including: EC2, Route 53, Load Balancer and Certificate Manager for https, and Simple Email Service to link the contact form below to my email.
                           Mobile responsive.
                        </p>
                    </div>
                    <div class="ContentBlock large " style="">
                        <a href="https://github.com/apenn996/Unity-gamedev-4.git">
                            <span class="linkOverlay"> </span>
                        </a>
                       
                        <div class="card-header">
                            <h2 class="BricoF">  Unity C# RPG Game  </h2>
                            <ul class="languageList BricoF">
                                <li>Unity</li>
                                <li>C#</li>
                                <li>GitHub</li>
    
                                
                            </ul>
                        </div>
                        <img src="assets/images/tinified/unity-game4-min.JPG">
    
                        <p class="BricoF ">
                            A fully playable game experience with: Player vs. Enemy combat, spendable skill points, 30+ learnable spells, save states, full interactive audio, fluid pixel animations, and more. There are also an assortment of different enemies, levels, and puzzles for the player to discover. 
                        </p>
                    </div>
                    <div class="ContentBlock small ">
                        <a href="https://github.com/apenn996/Unity-gamedev-3.git">
                            <span class="linkOverlay"> </span>
                        </a>
                        <div>
                            <h2 class="BricoF"> Unity C# Tower Defense Game </h2>
    
                            <ul class="languageList BricoF">
                                <li>Unity</li>
                                <li>C#</li>
                                <li>GitHub</li>
    
    
                            </ul>
                        </div>
    
                        <p class="BricoF">
    
                            Tower defense game where you can buy, upgrade, place towers to defend against waves of enemies. 
                        </p>
                    </div>
                    <div class="ContentBlock small ">
                        
                        <a href="https://github.com/apenn996/unity-hololens.git" style="color: black;"> 
                           
                          <div>
                           
                            <h2 class="BricoF"> Microsoft HoloLens Application </h2>
    
                            <ul class="languageList BricoF">
                                <li>Unity</li>
                                <li>C#</li>
                                <li>GitHub</li>
                                <li>HoloLens</li>
                            </ul>
                        </div>
    
                        <p class="BricoF" style="width: 250px;">
    
                            A Microsoft HoloLens Cooking App. 
                        </p>
                        <img id="hololens"
                        src="assets/images/tinified/hololens-min.png">
                    </a>
                    </div>
                    
                    
    
                    <div class="ContentBlock large not-allowed " style="">
                        
                        <div class="contentBanner soon">
                            <div class="BricoF" style="position: relative; top: 55%;"> SOON </div>
                        </div>
                        <div class="card-header">
                            <h2 class="BricoF"> React.js & Node.js Website </h2>
                            <ul class="languageList BricoF">
                                <li>HTML5</li>
                                <li>CSS3</li>
                                <li>JavaScript</li>
                                <li>React.js</li>
                                <li>Node.js</li>
    
                                
                            </ul>
                        </div>
                        <img src="assets/images/tinified/test.JPG">
    
                        <p class="BricoF ">
                            A basic website written with React.js.
                            Created to showcase a professional desgin.
                        </p>
                    </div>
                    <div class="ContentBlock small ">
                        <a href="https://github.com/apenn996/Unity-gamedev-2.git"><span class="linkOverlay"> </span></a>
                          
                      
                        <div>
                            <h2 class="BricoF"> Unity C# FPS Game </h2>
    
                            <ul class="languageList BricoF">
                                <li>Unity</li>
                                <li>C#</li>
                                <li>GitHub</li>
                                
    
    
                            </ul>
                        </div>
    
                        <p class="BricoF">
                            First person shooter game where you survive against waves of enemies. 
                           
                        </p>
                       
                    
                    </div>
                    
                    <div class="ContentBlock small ">
                        <a href="https://github.com/apenn996/java-cardgames.git"><span class="linkOverlay"> </span></a>
                            
                      
                        <div>
                            <h2 class="BricoF"> Java card games </h2>
    
                            <ul class="languageList BricoF">
                                <li>Java</li>
                                <li>JavaFX</li>
                                <li>Eclipse</li>
                                <li>GitHub</li>
    
                            </ul>
                        </div>
    
                        <p class="BricoF">
    
                            A collection of a few card games such as Blackjack, War, and Hearts written in Java in tandem with JavaFX.
                        </p>
                        <img 
                        src="assets/images/tinified/aces-min.png">
                    
                    </div>
                    <div class="ContentBlock small ">
                        <a href="https://github.com/apenn996/Unity-gamedev-1.git"><span class="linkOverlay"> </span></a>
                            
                      
                        <div>
                            <h2 class="BricoF"> Unity C# Endless Runner Game </h2>
    
                            <ul class="languageList BricoF">
                                <li>Unity</li>
                                <li>C#</li>
                                <li>GitHub</li>
    
    
                            </ul>
                        </div>
    
                        <p class="BricoF">
                           Endless runner game with power-ups and increasingly harder levels. 
                           
                        </p>
                       
                    
                    </div>
                    <div class="ContentBlock small ">
                        <a href="https://github.com/apenn996/C-data-structures.git"><span class="linkOverlay"> </span></a>
                            
                      
                        <div>
                            <h2 class="BricoF"> C Data Structures </h2>
    
                            <ul class="languageList BricoF">
                                <li>C</li>
                                <li>GitHub</li>
    
    
                            </ul>
                        </div>
    
                        <p class="BricoF">
                            An assortment of programs written in C that utilize various data structures including: linked lists, graphs, queues, stacks, 
                           
                        </p>
                       
                    
                    </div>
                    <!-- <div class="ContentBlock small not-allowed">
                        
                        <div class="contentBanner tbd">
                            <div class="BricoF" style="position: relative; top: 50%;"> TBD </div>
                        </div>
                        <div class="tbdTitle"></div>
                        <ul class="tagList BricoF">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
    
                        </ul>
                        <div class="tbdParagraph"></div>
                    </div> -->
    
                    
    
                </div>
    
    
                <div><!--shapes-->
    
                </div>
    
            </div>
            <div id="wc4" class="whiteContainer">
                <div><!--tabs-->
                    <div class="containerTabRight"></div>
                    <div class="containerTabLeft"></div>
                </div>
    
                <div class="corners">
                    <div class="top left"></div>
                    <div class="top right"></div>
                    <div class="bottom right"></div>
                    <div class="bottom left"></div>
                </div>
                <form action="mail.php" id="contactForm" class="contactForm" method="POST">
                    <div class="RR" style="justify-content: start;">
                        <div>
                            <h3 class="BricoF spaceContainer Title"> Contact</h1>
                        </div>
                        
                            
                                <div class="initialContact BricoF">
                                    <label>Name:</label>
                                    <input class="form-input-small" name="name" type="text" placeholder="John Doe" id="name" onblur="checkName(this.value)">  
                                    <div class="help-block" id="nameHelp"></div>
                                    <label >Email:</label>
                                    <input  class="form-input-small" name="email" type="email" placeholder="myexample@something.com" id="email" onblur="checkEmail(this.value)">  
                                    <div class="help-block" id="emailHelp"></div>
                                    <label>Phone Number (optional):</label>
                                    <input class="form-input-small" name="pNumber" type="textarea" placeholder="(XXX)-XXX-XXXX" id="pNumber" onblur="checkPhoneNumber(this.value)">  
                                    <div class="help-block" id="pNumberHelp"></div>
                                </div>
                                
                               
                                
                      
    
                    </div>
    
    
                    <div class="spaceContainer BricoF content">
    
                        
                        <div >
                            <label>Subject:</label>
                            <input class="form-input-small" name="subject" type="text" placeholder="Wow, cool site!" id="subject" onblur="checkSubject(this.value)">  
                            <div class="help-block" id="subjectHelp"></div>
                            <label>Message:</label>
                            <textarea style="font-size: 1.2em"class="form-input-large" type="text" name="comment" id="comments" rows="10" cols="100" onblur="checkComments(this.value)"></textarea>
                            
                            <button style="float: right;" id="submit" class="button" type="submit" onclick="contactRecieved()">Submit</button>
                        
                           </div>
                        <!--<a href="projects.html">
                        <div class="smallBlock"></div>
                    </a>-->
                    <!-- <img id="astronaut" src="assets/images/astronautfixed.png" alt="astronaut" /> -->
    
                    </div>
                </form>
    
            </div>
    
        </div>
    
        </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        <div class="FooterContainer">
            <img id="astronaut3" src="assets/images/tinified/astro3.png" alt="astronaut" /> 
            <img id="astronaut2" src="assets/images/tinified/astro2-min.png" alt="astronaut" /> 
    
            <div><!--tabs-->
                <div class="containerTabRight"></div>
                <div class="containerTabRight" style="transform: scaleX(-1); left: 0px;"></div> 
            </div>
    
            <div class="VerticalFooterBlockContainer">
                <div class="Block"></div>
                <div class="Block"></div>
                <div class="Block BricoF">
                    <h3 class="FooterHeader">
                        Tools
                    </h3>
                    <ul class="FooterList">
                        <li><a href="https://www.adobe.com/express/feature/image/editor">Adobe Editor</a></li>
                        <li><a href="https://color.adobe.com/create/color-wheel">Adobe Color</a></li>
                        <li><a href="https://colorhunt.co/">Color Hunt</a></li>
                        <li><a href="https://icons8.com/">icons8</a></li>
                        <li><a href="https://imagecompressor.com/">imagecompressor</a></li>
    
    
    
                    </ul>
                    <div style="position: absolute; top: 0px; left: 176px;">
                        <h3 class="FooterHeader">
                            Elsewhere
                        </h3>
                        <ul class="FooterList">
                            <li><a href="#">LinkedIn</a></li>
                            <li><a href="https://github.com/apenn996?tab=repositories">GitHub</a></li>
                          
    
    
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="VerticalFooterBlockContainer">
                <div class="Block2">
                    © 2023 Austin Pennartz
                </div>
    
            </div>
        </div>
    
    
    
    </body>
    
    
    <footer>
        <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    
        <script src=" https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
        <script src="assets/js/theme.js"></script>
        <script src="assets/js/gradient.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.22/bundled/lenis.min.js"></script>
    
        <script src="assets/js/scrollanimate.js"></script>
        <script src="assets/js/validate.js"></script>
        <script src="assets/js/flashing.js"></script>
    </footer>
    
    </html>';

    
//include 'connection.php';


    ?>
