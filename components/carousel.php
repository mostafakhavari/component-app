<div class="carousel">

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="title-components">
                <h4>this title for carousel section</h4>
            </div>
        </div>
        <div class="owl-carousel p-3">
            <?php
            for ( $i = 0 ; $i < 6 ; $i++ ) {
                echo "
            <div ><img class='card-img-top' height='180' src='./assets/img/img-carousel-1.jpg' alt='Card image' /> </div>
            <div ><img class='card-img-top' height='180' src='./assets/img/img-carousel-2.jpg' alt='Card image' /> </div>
           ";
            }
            ?>
        </div>
    </div>
</div>

</div>
