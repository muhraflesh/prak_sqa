<?php 
$query=mysqli_query($con,"select id, Title, Subtitle, BackgroundImage from tblbanner where id=1 AND Is_Active=1");
while ($row=mysqli_fetch_array($query)) {
?>
    <section class="hero-banner" style="background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('pawon/postimages/<?php echo htmlentities($row['BackgroundImage']);?>') left center no-repeat;background-size:cover;">
        <div class="text-center">
            <h2 style="text-transform: uppercase; padding-left: 17px; padding-right: 17px;"><?php echo htmlentities($row['Title'])?></h2>
            <p style="padding-left: 17px; padding-right: 20px; padding-bottom: 20px; font-size: 18px;"><?php echo htmlentities($row['Subtitle'])?></p>
            <a class="button button-header" href="about-us.php" style="padding-top: 10px">Tentang JOGJAKARTANS.ID</a>
        </div>
    </section>

<?php } ?>

<style>
.hero-banner{
    position:relative;
    padding:50px 0;
}
.button-header{
    background:#FDC710;
    color:#fff;
    border-color:#FDC710
}
.button-header:hover{
    background:#E3B104;
    color:#fff
}
</style>