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


          // console.log('====================================');
          console.log(data);
          // console.log('====================================');









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
            window.location.href = "/";
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




//   $(document).ready(async function() {
//     if ($("#categoryContainer").length) {
//         $("#categoryContainer").html('');

//         let SHEET_ID = '1PZZ74DsGbrJ1LWiNXr11sSS6aqsgngLQZudBTEMmRMk';
//         let SHEET_TITLE = 'product';
//         let SHEET_RANGE = 'A1:F10000';
//         let url = "https://docs.google.com/spreadsheets/d/" + SHEET_ID + "/gviz/tq?sheet=" + SHEET_TITLE + "&range=" + SHEET_RANGE;
        

//         fetch(url)
//             .then(response => response.text())
//             .then(data => {
//                 let dataJson = JSON.parse(data.substring(47).slice(0, -2)); 
//                 let i = 0;
//                 let j = 4;


//                 dataJson.table.rows.forEach(row => {
//                     let categoryTitle = row.c[1].v;
//                     let categoryDescription = row.c[2].v;
//                     let categoryEnable = row.c[3].v;
//                     let categoryImage = row.c[4].v;
//                     let FetchcategoryId = row.c[5].v;
//                     console.log(FetchcategoryId);
//                     if(FetchcategoryId == categoryId){
//                         if(i === 0 || i === j) {
//                             $("#categoryContainer").append(`<div class="row product-cat-row rowCategory">`);
//                         }
//                           if(categoryEnable ==1){
//                         $(".rowCategory:last-child").append(`
//                             <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 product-cat">
//                                 <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
//                                     <div class="icon">
//                                         <img class="category-image" src="${categoryImage}" alt="Image Description">
//                                     </div>
//                                     <h4 class="title"><a href="">${categoryTitle}</a></h4>
//                                     <p class="description">${categoryDescription}</p>
//                                 </div>
//                             </div>
//                         `);
//                       }
//                         if(i === j || i === dataJson.table.rows.length) {
//                             // Close the row after every 4 items or at the end of data
//                             $(".rowCategory:last-child").append(`</div>`);
//                             j += 4; // Increment the threshold for next row
//                         }
//                         i++;
//                     }else{
//                       // $("#categoryContainer").append(`<p> No any products.......</p>`);
//                     }
//                 });
//             })
//             .catch(error => console.error('Error:', error));
//     }
// });

// if (categoryId) {
// $(document).ready(async function() {

//   let SHEET_ID = '1PZZ74DsGbrJ1LWiNXr11sSS6aqsgngLQZudBTEMmRMk';
//   let SHEET_TITLE = 'category';
//   let url = `https://docs.google.com/spreadsheets/d/${SHEET_ID}/gviz/tq?tqx=out:csv&sheet=${SHEET_TITLE}`;
//   // let url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSo6OZpZIQgKEAD0xSj4j93cO6E3pr3K9uq5jZ4a4nKULp-2pQ7Nq0o9AUFKwciUn5pap9GiruTbWkA/pub?output=csv";

//   let res = await fetch(url)
//     .then(response => response.text())
//     .then(csvData => {
//       csvData = csvData.replace(/"/g, "").replace(/\\/g, "");
//       let rows = csvData.split("\n");

//       let headers = rows[0].split(",");
  
//       let data = {};

//       for (let i = 1; i < rows.length; i++) {

//         let columns = rows[i].split(",");
       
//         let rowData = {};
//         for (let j = 0; j < headers.length; j++) {
//           rowData[headers[j]] = columns[j];
//         }
  
//         data[rowData["id"]] = rowData;
//       }
     
//       let matchedData = data[categoryId];
//       $("#category-heading-id").append(`<h2 class="category-heading">${matchedData['title']}</h2>`);;
//       // console.log(matchedData); 
//     })
//     .catch((err) => {
//       console.log("CSV Error", err);
//     });
// });
// }



  </script>

</body>

</html>