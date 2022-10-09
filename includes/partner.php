<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style-partner.css" rel="stylesheet">

<section class="section-padding--small-partner partner-bg">
    <div class="container">

      <div class="partner-wrapper partner-wrapper--small">
        <p class="partner-title mb-1-5"><b>Official partner</b></p>
        <div class="row text-center">

          <?php 
            if (isset($_GET['pageno'])) {
                  $pageno = $_GET['pageno'];
              } else {
                  $pageno = 1;
              }
              $no_of_records_per_page = 3;
              $offset = ($pageno-1) * $no_of_records_per_page;

              $total_pages_sql = "SELECT COUNT(*) FROM tblpartner";
              $result = mysqli_query($con,$total_pages_sql);
              $total_rows = mysqli_fetch_array($result)[0];
              $total_pages = ceil($total_rows / $no_of_records_per_page);

              $query=mysqli_query($con,"select NamaPartner, IgPartner, ImagePartner from tblpartner where Is_Active=1 LIMIT $no_of_records_per_page");
              while ($row=mysqli_fetch_array($query)) {
              ?>

              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="partner-single">
                  <a href="<?php echo htmlentities($row['IgPartner']);?>" target="_blank">
                    <img class="img-fluid" src="pawon/postimages/<?php echo htmlentities($row['ImagePartner']);?>" style="height:84px" alt="">
                  </a>
                </div>
                <p style="padding: 5px"><b><a href="<?php echo htmlentities($row['IgPartner']);?>" target="_blank"><?php echo htmlentities($row['NamaPartner']);?></a></b></p>
              </div>
          <?php } ?>
        </div>
      </div>
    </div>
</section>

<script src="vendor/jquery/jquery.min.js"></script>

<style>
.mb-1-5 {
    margin-bottom: 1.5rem!important;
}
.section-padding--small-partner{
	padding:50px 0
}
.partner-title {
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

@media (min-width: 992px){
	.section-padding--small-partner{
		padding:50px 0
	}}
</style>