    <div class="col-md-4">
      
          <!-- SEARCH WIDGET -->
          <div class="card mb-4 bg-link">
              <h5 class="card-header card-header-color popins" style="background: #1734E1;">Search</h5>
              <div class="card-body">
                <form name="search" action="search.php" method="post">
                  <div class="input-group">
                    <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="submit">Go!</button>
                    </span>
                </form>
                </div>
              </div>
          </div>

          <!-- KATEGORI -->
          <div class="card my-4">
            <h5 class="card-header popins" style="background: #1734E1; color: white">Kategori</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory where Is_Active=1");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                      <li>
                        <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                      </li> 
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- RECENT NEWS -->
          <div class="card my-4">
            <h5 class="card-header popins" style="background: #1734E1; color: white">Berita</h5>
              <div class="card-body">
                <ul class="mb-0">
                  <?php
                  $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.Is_Active=1 order by tblposts.PostingDate desc limit 8");
                  while ($row=mysqli_fetch_array($query)) {
                  ?>
                    <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>

<style>
.card-header-color {
  background: #1734E1;
  color: white
}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 33%;
  padding: 0 5px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: #f1f1f1;
}
/* devanagari */
.popins {
    font-family: 'Poppins';
    font-style: normal;
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
/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
</style>