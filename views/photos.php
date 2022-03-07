<div class="container">
    <div class="photos">
        <h2>PHOTOS</h2>
        <p class="fst-italic text-center">Temps forts et photos d’illustration du Centre de Formation
            <strong>ERP</strong>
        </p>
    </div>
</div>

<!-- VIDEO SECTIONS START -->
<div id="videos">
    <div class="row cancel-row-margins">
        <div class="d-flex justify-content-center col-sm-12 col-md-6 col-lg-4 mt-2 mb-2">
            <video controls="controls">
                <source src="../../videos/Erp-video-2.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="d-flex justify-content-center col-sm-12 col-md-6 col-lg-4 mt-2 mb-2">
            <video controls="controls">
                <source src="../../videos/Erp-video-1.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="d-flex justify-content-center col-sm-12 col-md-6 col-lg-4 mt-2 mb-2">
            <video controls="controls">
                <source src="../../videos/Erp-video-3.mp4" type="video/mp4" />
            </video>
        </div>
    </div>
</div>
<!-- VIDEO SECTIONS END -->


<!-- GALLERY SECTION START -->
<div id="gallery">
    <div id="nanogallery2" data-nanogallery2='{
                "thumbnailWidth":  "300",
                "thumbnailHeight":  "220",
                "thumbnailAlignment": "center",
                "thumbnailBorderHorizontal": 0,
                "thumbnailBorderVertical": 0,
                "thumbnailGutterWidth": 10,
                "thumbnailGutterHeight": 10,
                "thumbnailHoverEffect2": "customlayer_backgroundColor_rgba(0,0,0,0.0)_rgba(0,0,0,0.5)_1000"
                }'>

        <?php for ($i = 1; $i <= 20; $i++) : ?>
            <a href="img/photos/<?= $i ?>.jpeg" data-ngthumb="<?= $i ?>t.jpeg">
                <img src="img/photos/<?= $i ?>.jpeg" alt="">
            </a>
        <?php endfor; ?>
    </div>
</div>
<!-- GALLERY SECTION END -->