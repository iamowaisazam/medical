  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <img src="assets/img/logo/footer-logo.png" alt="Logo" class="logo-image">
              <p>
                  GAREEB NAWAAZ SURGICAL LTD.
                <br>
                is a reputable and dynamic company
                <br>
                 specializing in importing surgical
                <br>
                 instrument,orthopedic implants,
                <br>
                 medical,equipments,consumables and 
                <br>
                 hospital clothing
              </p>
            
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $currentURL?>#silder">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $currentURL?>#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $currentURL?>#doctors">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $currentURL?>#testimonials">testimonials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $currentURL?>#gallery">Clients</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#Category">Category</a></li>-->
          
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Category</h4>
            <ul class="footer_category_drop" >
              <li><i class="bx bx-chevron-right"></i> <a href="#">All Surgical</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dental Instrument</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Orthopedic Implants</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Laboratry Equipments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Orthopedic Rehabilitation Product</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hospital Hollowares</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Social Links</h4>
           <div class="social-links mt-3">
                <a href="https://www.facebook.com/profile.php?id=100057086126516&mibextid=ZbWKwL" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.tiktok.com/@gareebnawaazsurgical?_t=8lpapbkIoeU&_r=1" class="tiktok" target="_blank"><i class="bx bxl-tiktok"></i></a>
                <a href="https://www.instagram.com/gareebnawazsurgical?igsh=aDhwNHYzaG9hNDk2" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
              </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gareeb Nawaaz Surgical LTD</span></strong>. All Rights Reserved Designed by <a href="https://azamsolutions.com/">azamsolutions</a>
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->


  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
        $('#contact-form').submit(function(e) {
            e.preventDefault(); // Prevent form submission

            var formData = $(this).serialize(); // Serialize form data

            // Show loading indicator
            $('.loading').show();

            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'), // Form action attribute
                data: formData,
                dataType: 'json',
                success: function(response) {
                    // Hide loading indicator
                    $('.loading').hide();

                    if (response.result === 'success') {
                        // Display success message
                    $('.loading').hide();
                        $('.sent-message').text('Your message has been sent. Thank you!').show();
                    } else {
                        // Display error message
                        $('.error-message').text('Oops! Something went wrong. Please try again later.').show();
                    }
                },
                error: function() {
                    // Hide loading indicator
                    $('.loading').hide();

                    // Display error message
                    $('.error-message').text('Oops! Something went wrong. Please try again later.').show();
                }
            });
        });
    });

      $(document).ready( async function(){

          let data = await getData();

          if($("#Category .row")){
            $("#Category .row").html('');
            data[0].forEach(element => {
              
              // console.log(element[1]);
              if(element[3] == 0){
                  $("#Category .row").append(`
                  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">
                          <img class="category-image" src="${element[5]}" alt="Image Description">
                      </div>
                    <h4 class="title"><a href="category.php?id=${element[2]}">${element[1]}</a></h4>
                    <p class="description">${element[4]}</p>
                  </div>
                </div>`); 
                }
            });
          }
            

          $('.category_menu_dropdown').html('');
          data[0].forEach(element => {
              if(element[3] == 0){
                $(".category_menu_dropdown").append(`<li>
                <a href="category.php?id=${element[2]}">${element[1]}</a>
                </li>`); 
              }
          });

          $('.footer_category_drop').html('');
          data[0].forEach(element => {
              if(element[3] == 0){
                $(".footer_category_drop").append(`<li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="category.php?id=${element[2]}">${element[1]}</a>
                </li>`); 
              }
          });

          var urlIdGet = window.location.href;
          var urlObj = new URL(urlIdGet);
          var categoryId = urlObj.searchParams.get('id');

          if(categoryId == null){
            // window.location.href = "/";
             return false;
          }

    
          var getSelectCategory = data[0].filter((d) => { return categoryId == d[2]});
          $("#category-heading-id").append(`<h2 class="category-heading">${getSelectCategory[0][1]}</h2>`);
          if(!getSelectCategory){
            window.location.href = "/";
            return false;
          }

          
          console.log(categoryId);
          data[1].forEach(el => {

            console.log(el[5]);
              if(el[5] == categoryId){
                
                $(".rowCategory").append(`<div id="products-${el[0]}"class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 product-cat">
                  <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon">
                          <img class="category-image" src="${el[4]}" alt="Image Description">
                      </div>
                      <h4 class="title"><a href="">${el[1]}</a></h4>
                      <p class="description">${el[2]}</p>
                    </div>
                  </div>`); 
                }
            });
          


          


    
 });
 $(document).ready(function() {
  
  getData().then(function(data) {
      $('#silder').html('');
      if (Array.isArray(data[0])) {
          data[1].forEach((element, index) => {
              if (element[7] == 1 && element[7]) {
                  $("#silder").append(`
                      <div  style="background-image: url(${element[4]})">
                          <div class="container">
                              <h2>${element[1]} </h2>
                              <p>${element[2]}</p>
                              <a href="category.php?id=${element[5]}#product-${element[0]}" class="btn-get-started scrollto">Read More</a>
                          </div>
                      </div>
                  `);
              }
            console.log(element);
          });
      } else {
          console.error("Data[0] is not an array or is empty.");
      }

      
      $('#silder').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>'
      });
  }).catch(function(error) {
      console.error("Error retrieving data:", error);
  });
});
  </script>

</body>

</html>