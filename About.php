<!DOCTYPE html>
<html lang="en">
    
    <!-- ================ FAVICON FILE LINK ================ -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">

    <!-- ================ META FILE CDN LINKS ================ -->
    <?php include_once './cdn/meta/meta.php'; ?>

    <!-- ================ IMPORT ICON's CDN LINKS ================ -->
    <?php include_once './cdn/icons/icon-cdn-links.php'; ?>

    <!-- ================ IMPORT SWIPER JS CDN LINKS ================ -->
    <?php include_once './cdn/slider/slider-cdn-links.php'; ?>

    <!-- ================ CSS CDN LINKS ================ -->
    <link rel="stylesheet" href="./assets/css/style.css">


    <!-- ================ TITLE ================ -->
    <title>Salaka | About</title>
<body>



    <div class="page">

        <!--========== SCROLL TOP STARTS ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>
        <!--========== SCROLL TOP ENDS ==========-->

        

        <!-- ================ HEADER STARTS ================ -->
        <?php include_once './includes/Header.php'; ?>
        <!-- ================ HEADER ENDS ================ -->



        <div class="section__container">

            <!-- ================ CATEGORIES STARTS ================ -->
            <?php include_once './includes/About.php'; ?>
            <!-- ================ CATEGORIES ENDS ================ -->

        </div>

        
        <!-- ================ REVIEW STARTS ================ -->
        <?php include_once './includes/Review.php'; ?>
        <!-- ================ REVIEW ENDS ================ -->




        
        <!-- ================ FOOTER STARTS ================ -->
        <?php include_once './includes/Footer.php'; ?>
        <!-- ================ FOOTER ENDS ================ -->



        
        <!-- ================ LOADER STARTS ================ -->
        <div class="loader__container">
            <div class="loader">
                <p class="text">
                    loading...
                </p>
            </div>
        </div>
        <!-- ================ LOADER ENDS ================ -->


    </div>


    <script src="./assets/js/main.js"></script>
</body>
</html>