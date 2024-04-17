  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <img src="assets/img/logo/footer-logo.png" alt="Logo" class="logo-image">
              <p>
                  GAREEB NAWAZ SURGICAL.
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
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#doctors">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">testimonials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Clients</a></li>
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
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ghareeb Nawaz Surgical LTD</span></strong>. All Rights Reserved Designed by <a href="https://azamsolutions.com/">azamsolutions</a>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
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
                
                $(".rowCategory").append(`<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 product-cat">
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
  </script>

</body>

</html>