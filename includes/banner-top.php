<?php 
$query=mysqli_query($con,"select id, Title, Subtitle, BackgroundImage from tblbanner where id=3 AND Is_Active=1");
while ($row=mysqli_fetch_array($query)) {
?>
    <section class="hero-banner" style="background:linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('pawon/postimages/<?php echo htmlentities($row['BackgroundImage']);?>') left center no-repeat;background-size:cover;">
        <div class="text-center">
            <p style="padding-left: 2px; padding-right: 2px"><?php echo htmlentities($row['Subtitle'])?></p>
            <h1 style="text-transform: uppercase;"><?php echo htmlentities($row['Title'])?></h1>
            <a class="button button-header scrollLink" href="#berita-psim">Baca Berita PSIM</a>
        </div>
    </section>
<?php } ?>

<script>
    $(document).ready(function () {
        $("a.scrollLink").click(function (event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
        });
    });
</script>

<style>
.hero-banner{
    position:relative;
    padding:70px 0;
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