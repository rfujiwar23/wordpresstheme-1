
<footer class="main-footer bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            
            <?php if ( is_active_sidebar( '.footer_widgets' ) ) : ?>
                        <?php dynamic_sidebar( '.footer_widgets' ); ?>
                <?php endif; ?>
        </div>
    </div>
</footer>
<!-- <div class="copyright bg-dark text-white pt-3 pb-3">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="small m-0">Copyright &copy; <?php echo date('Y'); ?>IFING Co., Ltd. All Rights Reserved</p>
            </div>
        </div>
    </div>
</div> -->


<?php wp_footer(); ?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>