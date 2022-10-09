<body style="padding-top: 0px" class="popins">
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg">
        <div class="container box_1620">
        <?php 
          $query=mysqli_query($con,"select Nama, Icon from tblicon where kode='icon_navbar'");
          while ($row=mysqli_fetch_array($query)) {
          ?>
            <a class="navbar-brand logo_h" href=""><img src="pawon/postimages/<?php echo htmlentities($row['Icon']);?>" height="60" alt="<?php echo htmlentities($row['Nama'])?>"></a>
        <?php } ?>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link popins" href="index.php">Home</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Berita</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.php?catid=2">PSIM Jogja</a>                  
                  <li class="nav-item"><a class="nav-link" href="category.php?catid=3">Jogjakarta Fans</a>                  
                  <li class="nav-item"><a class="nav-link" href="category.php?catid=5">Jogjakarta</a> 
                  <li class="nav-item"><a class="nav-link" href="category.php?catid=6">Umum</a>                 
                </ul>
							</li>

              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Galeri</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="galery-images.php">Mataram Day</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="galery-images.php">Event</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Video</a></li> -->
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="about-us.php">Tentang Kami</a></li>
              <li class="nav-item"><a class="nav-link" href="contact-us.php">Kontak</a></li>
            </ul>

            <!--<ul class="nav-right text-center text-lg-right py-4 py-lg-0">
              <li><a href="#">Get Ticket</a></li>-->
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
</body>

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<style>
.nav-color {
  background: #EDF0FE
}
.nav-link {
    color: white;
}
.nav-item:hover {
  color: red;
}
/* devanagari */
.popins {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
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