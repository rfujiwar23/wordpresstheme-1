<div class="bd-example">
                        <h2><span>ユーザーの声</span></h2>
                        <div id="carouselExampleCaptions" class="carousel slide stylist-carousel" data-ride="carousel">
                            <div class="carousel-indicators">
                                <?php while (have_rows('all-voices')) : the_row(); ?>
                                    <?php $counter = get_row_index(); ?>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $counter - 1; ?>" class="<?php if (get_row_index() == 1) echo 'active'; ?>" aria-current="<?php if (get_row_index() == 1) echo 'true'; ?>" aria-label="Slide <?php echo $counter - 1; ?>"></button>
                                <?php endwhile ?>
                            </div>

                            <div class="carousel-inner">
                                <?php while (have_rows('all-voices')) : the_row(); ?>
                                    <div class="carousel-item <?php if (get_row_index() == 1) echo 'active'; ?>" data-bs-interval="3000">
                                        <?php
                                        $image = get_sub_field('user-image');
                                        $user = get_sub_field('user-alias');
                                        $age = get_sub_field('user-age');
                                        $comment = get_sub_field('user-comment');
                                        ?>
                                        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-8 offset-sm-2">
                                            <div class="row">
                                                <div class="user-image col-sm-4 col-4">
                                                    <img src="<?php echo $image; ?>" alt="" class="img-fluid">
                                                </div>
                                                <div class="user-voice col-sm-8 col-9 d-flex align-items-center justify-content-center">
                                                    <div class="carousel-text-area" style="width:100%;">

                                                        <p><?php echo $comment ?></p>
                                                        <p class="user-details"> - <?php echo $user ?> <span class="age"><?php echo $age ?>代</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile ?>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>