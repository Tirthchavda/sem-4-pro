<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETERNA - MEN</title>

    <?php require('inc/links.php') ?>
    
    <!-- Swiper JS's CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
  <!-- <div class="tagline mt-1 h"><span class="r">"</span> A Legacy In Every Second <span class="r">"</span></div> -->
 
  <!-- Includes Header -->
  <?php require('inc/header.php') ?>

  <!-- Quote Section -->
  <div class="my-2 px-4">
    <p class="text-center mt-3 fs-5 h">
    "Every second counts. Make them extraordinary."
    </p>
  </div>

  <div class="container">
    <div class="row px-0">

      <?php 
      
        $men_res = select("SELECT * FROM `men` WHERE `status`=? AND `removed`=?",[1,0],'ii');

        while ($men_data = mysqli_fetch_assoc($men_res))
        {
          // get thumbnail of image
          $men_thumb = MEN_IMG_PATH."thumbnail.jpg";
          $thumb_q = mysqli_query($con,"SELECT * FROM `men_images` 
            WHERE `men_id`='$men_data[id]' 
            AND `thumb`='1'");

          if (mysqli_num_rows($thumb_q) > 0) {
            $thumb_res = mysqli_fetch_assoc($thumb_q);
            $men_thumb = MEN_IMG_PATH.$thumb_res['image'];
          }

          // Print Room Card
          echo<<<data
            <div class="col-lg-3 col-md-4 ps-5 my-3">
              <div class="card border-0 shadow text-center p-2">
                <div class="img-container">
                  <img src="$men_thumb" class="img-fluid rounded" style="max-width: 80%; height: auto;">
                </div>
                <div class="card-body text-start p-2">
                  <h6 class="mb-1 fs-6">$men_data[name]</h6>
                  <p class="text-secondary mb-1" style="font-size: 0.8rem;">$men_data[category]</p>
                  <p class="fw-bold" style="font-size: 0.9rem;">₹$men_data[price]/-</p>
                  <div class="rating mb-3">
                    <span class="badge bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-half text-warning"></i>
                    </span>
                  </div>
                  <div class="d-flex flex-column flex-lg-row justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none mb-2 mb-lg-0"> Book Now </a>
                    <a href="men_details.php?id=$men_data[id]" class="btn btn-sm btn-outline-dark shadow-none"> More Details </a>
                  </div>
                </div>
              </div>
          </div>
          data;

        }

      ?>

    </div>
  </div>

  <!-- Includes Footer -->
   <?php require('inc/footer.php') ?>
    
  <!-- jQuery's JS link -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>
</html>

