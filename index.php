<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
        margin: 0;
        padding: 0;

      }

      body{
        background-color: #000;
      }

      .icon{
        fill: transparent;
        stroke-width: 3;
        stroke: #8cc440;
        stroke-dasharray: 550;
        stroke-dashoffset: 550;
      }


      @keyframes hideshow {
    0% { stroke-dashoffset: 0; }
    20% { stroke-dashoffset: 550; }
    40% { stroke-dashoffset: 1100; fill: transparent;}
    50% { stroke-dashoffset: 1100; fill: #8cc440; }
    100% { stroke-dashoffset: 1100; fill: transparent;}
}

.icon {
  animation: hideshow 3s linear infinite;
}
    </style>
</head>
<body>
  <div class="container" style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%)" >
  <svg id="svg2" width="100" height="100" viewBox="0 0 600 600">
      <defs id="defs6">
          <clipPath clipPathUnits="userSpaceOnUse" id="clipPath18">
              <path d="M 0,450 H 450 V 0 H 0 Z" id="path16" />
          </clipPath>
      </defs>
      <g id="g10" inkscape:groupmode="layer" inkscape:label="GreenStar Advisors - Just the Icon - Exactly Square, Transparent" transform="matrix(1.3333333,0,0,-1.3333333,0,600)">
        <g id="g12">
          <g id="g14" clip-path="url(#clipPath18)">
            <g id="g20" transform="translate(196.082,151.9238)">
              <path class="icon" d="M 0,0 C 7.523,5.668 15.034,11.396 22.557,17.088 V -26.16 l -124.076,-93.961 c 14.588,44.586 29.259,89.125 43.871,133.711 2.147,6.338 4.189,12.686 6.196,19.072 l 40.256,12.346 c -7.782,-23.754 -15.61,-47.486 -23.379,-71.25 8.626,6.537 17.241,13.074 25.855,19.623 l 0.012,-0.012 8.72,6.618 z" 
                    
                    id="path22" />
            </g>
            <g id="g24" transform="translate(352.584,38.1875)">
              <path class="icon" d="m 0,0 c -40.736,29.61 -81.473,59.197 -122.209,88.82 v 42.168 c 19.869,-14.483 39.762,-28.942 59.68,-43.377 -2.606,8.403 -5.153,16.819 -7.711,25.233 l -14.166,46.358 39.515,-11.736 z"
                    
                    id="path26" />
            </g>
            <g id="g28" transform="translate(253.4375,254.2871)">
              <path class="icon" d="M 0,0 25.303,34.293 H 179.857 C 139.238,3.708 98.645,-26.912 58.023,-57.508 L 18.508,-45.771 C 38.447,-30.443 58.48,-15.292 78.445,0 65.781,0.012 53.129,0.012 40.49,0 H 29.469 C 19.646,0.023 9.822,0 0,0"
                    
                    id="path30" />
            </g>
            <g id="g32"transform="translate(141.0156,195.7461)">
              <path class="icon" d="m 0,0 -121.294,92.822 c 13.531,-0.222 27.099,0.588 40.584,-0.551 36.429,0.023 72.87,0.012 109.288,0.012 l 24.88,-33.741 c -24.411,0.022 -48.811,0 -73.234,0.011 9.307,-7.066 18.567,-14.166 27.862,-21.232 V 37.298 L 16.9,30.574 c 0,0.01 0.012,0.01 0.012,0.023 7.91,-6.056 15.832,-12.076 23.731,-18.12 z"
                    
                    id="path34" />
            </g>
            <g id="g36" transform="translate(179.1348,294.8472)">
              <path class="icon" d="M 0,0 1.197,3.604 H 1.091 C 15.961,48.307 30.784,93.01 45.63,137.725 60.676,92.165 75.512,46.546 90.322,0.916 V 0.904 L 65.523,-32.697 C 58.857,-12.358 52.121,7.946 45.501,28.285 42.732,20.058 40.009,11.819 37.262,3.591 l -3.45,-10.409 h 0.023 c -0.926,-2.782 -1.854,-5.563 -2.781,-8.345 l -6.15,-18.579 z"
                    
                    id="path38" />
          </g>
        </g>
      </g>
    </g>
  </svg>
</div>
</body>
</html>