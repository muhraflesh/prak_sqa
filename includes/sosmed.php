<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style-sosmed.css">

<section class="section-padding--small-sosmed bg-gray" style="padding-bottom: 25px">
    <div class="container text-center">
    <p class="sosmed-title mb-1-5"><b>Jogjakartans.id on Social Media</b></p>
      <div class="row text-center">
        <?php 
            if (isset($_GET['pageno'])) {
                  $pageno = $_GET['pageno'];
              } else {
                  $pageno = 1;
              }
              $no_of_records_per_page = 4;
              $offset = ($pageno-1) * $no_of_records_per_page;

              $total_pages_sql = "SELECT COUNT(*) FROM tblsosmed";
              $result = mysqli_query($con,$total_pages_sql);
              $total_rows = mysqli_fetch_array($result)[0];
              $total_pages = ceil($total_rows / $no_of_records_per_page);

              $query=mysqli_query($con,"select JenisSosmed, UrlSosmed, ImageSosmed from tblsosmed where Is_Active=1 LIMIT $no_of_records_per_page");
              while ($row=mysqli_fetch_array($query)) {
              ?>       

                <div class="col">
                    <a href="<?php echo htmlentities($row['UrlSosmed']);?>" target="_blank">
                        <img class="img-sosmed" src="pawon/postimages/<?php echo htmlentities($row['ImageSosmed']);?>" alt="">
                        <p style="padding: 5px"><b><a href="<?php echo htmlentities($row['UrlSosmed']);?>"><?php echo htmlentities($row['JenisSosmed']);?></a></b></p>
                    </a>
                </div>

        <?php } ?>
      </div>
    </div>
  </section>

  <script src="vendor/jquery/jquery.min.js"></script>

<style>
    .sosmed-title {
        color: black;
        font-family: 'Poppins';
        text-transform:uppercase;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        font-size:25px;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }
    /* latin-ext */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
</style>

  
          