 <!-- Slick CSS -->
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <!-- Our CSS -->
      <style>
        /* body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: #dedede;
        }

        .container {
            max-width: 900px;
            padding: 15px;
            background-color: #fff;
            margin-left: auto;
            margin-right: auto;
        } */

        .slider .slick-slide {
            border: solid 1px #000;
        }

        .slider .slick-slide img {
            width: 100%;
        }

        /* make button larger and change their positions */
        .slick-prev, .slick-next {
            width: 50px;
            height: 50px;
            z-index: 1;
        }
        .slick-prev {
            left: 5px;
        }
        .slick-next {
            right: 5px;
        }
        .slick-prev:before, 
        .slick-next:before {
            font-size: 40px;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        
        /* move dotted nav position */
        .slick-dots {
            bottom: 15px;
        }
        /* enlarge dots and change their colors */
        .slick-dots li button:before {
            font-size: 12px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
            opacity: 1;
        }
        .slick-dots li.slick-active button:before {
            color: #dedede;
        }

        /* hide dots and arrow buttons when slider is not hovered */
        .slider:not(:hover) .slick-arrow,
        .slider:not(:hover) .slick-dots {
            opacity: 0;
        }
        /* transition effects for opacity */
        .slick-arrow,
        .slick-dots {
            transition: opacity 0.5s ease-out;
        }

    </style>

    <div class="container">
        <div class="px-2">
          <!-- <marquee class="py-1" direction="left" onmouseover="this.stop()" onmouseout="this.start()"> -->
            <br>
          <!-- </marquee> -->
        </div>
        <div class="slider">
            <!-- <div>
                <a href="#">
                    <img src="assets/img/rshs.jpg" alt="gambar1">
                </a>            
            </div> -->
            <div>
                <a href="#">
                    <img src="assets/img/ppds1.jpeg" alt="gambar2">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="assets/img/ppds2.jpeg" alt="gambar3">
                </a>            
            </div>
        </div>
    </div>
        

        <!-- Our Script -->
        <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 1500,
                dots: true
            });
        });
        </script>