<div class="bootstrap-card">

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="title-components">
                <h4>this title for card section</h4>
            </div>
        </div>
        <?php
            for ( $i = 0 ; $i < 4 ; $i++ ){
          echo "
                <div class='col-md-6 col-lg-4 col-xl-3 mt-3'>
                <div class='card'>
            <img class='card-img-top' src='./assets/img/card-1.jpg' alt='Card image' />
            <div class='card-body'>
                <h5 class='card-title'>title</h5>
                <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 A commodi eius eos fugit incidunt similique.</p>
                <a href='#' class='btn btn-secondary card-btn-custom'>More ...</a>
            </div>
        </div>
        </div>
                ";
            }
        ?>
    </div>
</div>

</div>
