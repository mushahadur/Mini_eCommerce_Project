 <!-- ========================= JS here ========================= -->
 <script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
 <script src="{{asset('/')}}assets/js/tiny-slider.js"></script>
 <script src="{{asset('/')}}assets/js/glightbox.min.js"></script>
 <script src="{{asset('/')}}assets/js/main.js"></script>
 <script type="text/javascript">
     //========= Hero Slider 
     tns({
         container: '.hero-slider',
         slideBy: 'page',
         autoplay: true,
         autoplayButtonOutput: false,
         mouseDrag: true,
         gutter: 0,
         items: 1,
         nav: false,
         controls: true,
         controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
     });

     //======== Brand Slider
     tns({
         container: '.brands-logo-carousel',
         autoplay: true,
         autoplayButtonOutput: false,
         mouseDrag: true,
         gutter: 15,
         nav: false,
         controls: false,
         responsive: {
             0: {
                 items: 1,
             },
             540: {
                 items: 3,
             },
             768: {
                 items: 5,
             },
             992: {
                 items: 6,
             }
         }
     });


    //  Product Details page 
    const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                //reset opacity
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                //adding class 
                //current.classList.add("fade-in");
                //opacity
                e.target.style.opacity = opacity;
            });
        });
        
 </script>