<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETERNA - MEN DETAILS</title>

    <?php require('inc/links.php') ?>
    
    <!-- Swiper JS's CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
  <!-- <div class="tagline mt-1 h"><span class="r">"</span> A Legacy In Every Second <span class="r">"</span></div> -->
 
  <!-- Includes Header -->
  <?php require('inc/header.php') ?>

  <?php
  
    if (!isset($_GET['id'])) {
      redirect('men.php');
    }

    $data = filteration($_GET);

    $men_res = select("SELECT * FROM `men` WHERE `id`=? AND `status`=? AND `removed`=?",[$data['id'],1,0],'iii');

    if (mysqli_num_rows($men_res) == 0) {
      redirect('men.php');
    }

    $men_data = mysqli_fetch_assoc($men_res);

  ?>

  <div class="container">
    <div class="row">
      <div class="col-12 my-4 mb-4 px-4">
        <h2 class="fw-bold h-font" style="color: #c23737;"><?php echo $men_data['brand'] ?></h2>
        <div style="font-size: 14px;">
          <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
          <span class="text-secondary"> > </span>
          <a href="men.php" class="text-secondary text-decoration-none">MEN</a>
          <span class="text-secondary"> > </span>
        </div>
      </div>

      <div class="col-lg-5 col-md-12 px-4 mb-md-4" style="max-height: 550px; max-width: 550px;">
        <div id="menCarousel" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <?php 
            
              // get thumbnail of image
              $men_img = MEN_IMG_PATH."thumbnail.jpg";
              $img_q = mysqli_query($con,"SELECT * FROM `men_images` 
                WHERE `men_id`='$men_data[id]'");

              if (mysqli_num_rows($img_q) > 0) {
                $active_class = 'active';

                while ($img_res = mysqli_fetch_assoc($img_q)) {
                  echo"
                    <div class='carousel-item $active_class'>
                      <img src='".MEN_IMG_PATH.$img_res['image']."' class='d-block w-100 rounded'>
                    </div>";
                    $active_class='';
                }
                
              }  
              else {
                echo "<div class='carousel-item active'>
                  <img src='$men_img' class='d-block w-100'>
                </div>";
              }
            
            ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#menCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="filter: invert(1);" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#menCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="filter: invert(1);" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <div class="col-lg-7 col-md-12 px-4">
        <div class="card border-0 shadow-sm rounded-3">
          <div class="card-body me-0">
            <?php 
            
              // Product name
              echo<<<name
                <h6 class="mb-2" style="font-size: 23px;">$men_data[name]</h6>
              name;

              // Product category
              echo<<<cat
                <p class="text-secondary mb-2" style="font-size: 0.8rem;">$men_data[category]</p>
              cat;

              // Product price
              echo<<<price
                <p class="fw-bold mb-2" style="font-size: 1.2rem;">₹$men_data[price]/-</p>
              price;

              // Product text
              echo<<<tax
                <p class="fw-bold mb-2 text-secondary" style="font-size: 0.6rem;">Inclusive of all taxes*</p>
              tax;

              // Product ratings
              echo<<<rating
                <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-half text-warning"></i>
                </div>
              rating;

              // Product buy now button
              echo<<<buy
                <a href="#" class="btn btn-sm w-100 mt-3 btn-outline-dark shadow-none mb-2 mb-lg-0"> Book Now </a>
              buy;

              // Services
              echo<<<service
                <div class="d-flex align-items-center mt-5 justify-content-between usp-banner">
                  <figure class="text-center ">
                    <picture>
                      <source media="(min-width:1024px)" srcset="https://www.titan.co.in/on/demandware.static/-/Library-Sites-TitanSharedLibrary/default/dwf1ad66b9/images/PDP/usp-warranty-d.svg">
                      <img alt="Lifetime Warranty" src="https://www.titan.co.in/on/demandware.static/-/Library-Sites-TitanSharedLibrary/default/dwa856d9ee/images/PDP/usp-warranty-m.svg">
                    </picture>
                    <figcaption class="text-danger mt-2" style="font-size: 0.8rem;" class="mt-2">Lifetime Warranty</figcaption>
                  </figure>
                  <figure class="text-center ">
                    <picture>
                      <source media="(min-width:1024px)" srcset="https://www.titan.co.in/on/demandware.static/-/Library-Sites-TitanSharedLibrary/default/dwc6cc1fd3/images/PDP/usp-shipping-d.svg">
                      <img alt="Free Shipping Countrywide" src="https://www.titan.co.in/on/demandware.static/-/Library-Sites-TitanSharedLibrary/default/dw0561fc49/images/PDP/usp-shipping-m.svg">
                    </picture>
                    <figcaption class="text-danger mt-2" style="font-size: 0.8rem;" class="mt-2">Free Shipping Countrywide</figcaption>
                  </figure>
                  <figure class="text-center ">
                    <picture>
                      <source media="(min-width:1024px)" srcset="https://www.titan.co.in/on/demandware.static/-/Library-Sites-TitanSharedLibrary/default/dwde1071c9/images/PDP/usp-return-d.svg">
                      <img alt="Easy Return" src="https://www.titan.co.in/on/demandware.static/-/Library-Sites-TitanSharedLibrary/default/dw3474d226/images/PDP/usp-return-m.svg">
                    </picture>
                    <figcaption class="text-danger mt-2" style="font-size: 0.8rem;" class="mt-2">Easy Return</figcaption>
                  </figure>
                  <figure class="text-center ">
                    <picture>
                      <source media="(min-width:1024px)" srcset="https://www.titan.co.in/on/demandware.static/-/Library-Sites-TitanSharedLibrary/default/dw6b55ed46/images/PDP/usp-service-d.svg">
                      <img alt="Serviced Across India" src="https://www.titan.co.in/on/demandware.static/-/Library-Sites-TitanSharedLibrary/default/dw9909e23d/images/PDP/usp-service-m.svg">
                    </picture>
                    <figcaption class="text-danger mt-2" style="font-size: 0.8rem;" class="mt-2">Serviced Across India</figcaption>
                  </figure>
                </div>
              service;

              // Product Description and specification 
              echo<<<desc
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                      <h2 class="accordion-header">
                      <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Product Description
                      </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <p class="mb-1" style="font-size: 0.8rem;">$men_data[description]</p>
                      </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header">
                      <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Product Specification
                      </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <p class="mb-0" style="font-size: 0.8rem;">Brand </p>
                          <p class="text-secondary mb-3" style="font-size: 0.8rem;">$men_data[brand]</p>
                          <p class="mb-0" style="font-size: 0.8rem;">Model Number </p>
                          <p class="text-secondary mb-3" style="font-size: 0.8rem;">$men_data[modelnumber]</p>
                          <p class="mb-0" style="font-size: 0.8rem;">Movement </p>
                          <p class="text-secondary mb-3" style="font-size: 0.8rem;">$men_data[movement]</p>
                          <p class="mb-0" style="font-size: 0.8rem;">Case Material </p>
                          <p class="text-secondary mb-3" style="font-size: 0.8rem;">$men_data[casematerial]</p>
                          <p class="mb-0" style="font-size: 0.8rem;">Strap Material </p>
                          <p class="text-secondary mb-3" style="font-size: 0.8rem;">$men_data[strapmaterial]</p>
                          <p class="mb-0" style="font-size: 0.8rem;">Dial Size </p>
                          <p class="text-secondary mb-3" style="font-size: 0.8rem;">$men_data[dialsize]</p>
                          <p class="mb-0" style="font-size: 0.8rem;">Water Resistance </p>
                          <p class="text-secondary mb-3" style="font-size: 0.8rem;">$men_data[waterresistance]</p>
                          <p class="mb-0" style="font-size: 0.8rem;">Warranty </p>
                          <p class="text-secondary mb-3" style="font-size: 0.8rem;">$men_data[warranty]</p>
                      </div>
                      </div>
                  </div>
                </div>
              desc;
            
            ?>
          </div>
        </div>
      </div>

      <?php 
      
        // $men_res = select("SELECT * FROM `men` WHERE `status`=? AND `removed`=?",[1,0],'ii');

        // while ($men_data = mysqli_fetch_assoc($men_res))
        // {
        //   // get thumbnail of image
        //   $men_thumb = MEN_IMG_PATH."thumbnail.jpg";
        //   $thumb_q = mysqli_query($con,"SELECT * FROM `men_images` 
        //     WHERE `men_id`='$men_data[id]' 
        //     AND `thumb`='1'");

        //   if (mysqli_num_rows($thumb_q) > 0) {
        //     $thumb_res = mysqli_fetch_assoc($thumb_q);
        //     $men_thumb = MEN_IMG_PATH.$thumb_res['image'];
        //   }

        //   // Print Room Card
        //   echo<<<data
        //     <div class="col-lg-3 col-md-4 ps-5 my-3">
        //       <div class="card border-0 shadow text-center p-2">
        //         <div class="img-container">
        //           <img src="$men_thumb" class="img-fluid rounded" style="max-width: 80%; height: auto;">
        //         </div>
        //         <div class="card-body text-start p-2">
        //           <h6 class="mb-1 fs-6">$men_data[name]</h6>
        //           <p class="text-secondary mb-1" style="font-size: 0.8rem;">$men_data[category]</p>
        //           <p class="fw-bold" style="font-size: 0.9rem;">₹$men_data[price]/-</p>
        //           <div class="rating mb-3">
        //             <span class="badge bg-light">
        //               <i class="bi bi-star-fill text-warning"></i>
        //               <i class="bi bi-star-fill text-warning"></i>
        //               <i class="bi bi-star-fill text-warning"></i>
        //               <i class="bi bi-star-fill text-warning"></i>
        //               <i class="bi bi-star-half text-warning"></i>
        //             </span>
        //           </div>
        //           <div class="d-flex flex-column flex-lg-row justify-content-evenly mb-2">
        //             <a href="#" class="btn btn-sm btn-outline-dark shadow-none mb-2 mb-lg-0"> Book Now </a>
        //             <a href="men_details.php?id=$men_data[id]" class="btn btn-sm btn-outline-dark shadow-none"> More Details </a>
        //           </div>
        //         </div>
        //       </div>
        //   </div>
        //   data;

        // }

      ?>

    </div>
  </div>

  <!-- Includes Footer -->
   <?php require('inc/footer.php') ?>
    
  <!-- jQuery's JS link -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>

