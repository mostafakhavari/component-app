<div class="our-team">
<section class="our-webcoderskull padding-lg">
            <div class="container">
                <div class="row heading heading-icon">
                    <h2>Our Team</h2>
                </div>
                <ul class="row">
                    <?php
                    for ( $i = 0 ; $i < 4 ; $i++ ) {
                        echo "
                          <li class='col-12 col-md-6 col-lg-3'>
                        <div class='cnt-block equal-hight'>
                            <figure><img src='./assets/img/team.png' class='img-responsive' alt=''></figure>
                            <h3><a href='#'>Web coder skull</a></h3>
                            <p>Freelance Web Developer</p>
                            <ul class='follow-us clearfix'>
                                <li><a href='#'><i class='fa fa-facebook' aria-hidden='true'></i></a></li>
                                <li><a href='#'><i class='fa fa-twitter' aria-hidden='true'></i></a></li>
                                <li><a href='#'><i class='fa fa-linkedin' aria-hidden='true'></i></a></li>
                            </ul>
                        </div>
                    </li>
                        ";
                    }
                     ?>
                </ul>
            </div>
        </section>
</div>
