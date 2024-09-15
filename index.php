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
    <title>Salaka | Homepage</title>
<body>



    <div class="page">

        <!--========== SCROLL TOP STARTS ==========-->
        <a href="#" class="scrolltop " id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>
        <!--========== SCROLL TOP ENDS ==========-->

        

        <!-- ================ HEADER STARTS ================ -->
        <?php include_once './includes/Header.php'; ?>
        <!-- ================ HEADER ENDS ================ -->



        <div class="section__container">

            <!-- ================ BANNER STARTS ================ -->
            <?php include_once './includes/Banner.php'; ?>
            <!-- ================ BANNER ENDS ================ -->

            <!-- ================ CATEGORIES STARTS ================ -->
            <?php include_once './includes/Category.php'; ?>
            <!-- ================ CATEGORIES ENDS ================ -->


            <!-- ================ CATEGORY BANNER STARTS ================ -->
            <?php include_once './includes/Category_banner.php'; ?>
            <!-- ================ CATEGORY BANNER ENDS ================ -->


            <!-- ================ SALE PRODUCTS STARTS ================ -->
            <?php include_once './includes/Sale_producs.php'; ?>
            <!-- ================ SALE PRODUCTS ENDS ================ -->




            <!-- ================ TRENDING PRODUCTS STARTS ================ -->
            <?php include_once './includes/Trending_products.php'; ?>
            <!-- ================ TRENDING PRODUCTS ENDS ================ -->




            <!-- ================ PRODUCS CONAINER STARTS ================ -->
            <div class="products__container">

                <h1 class="heading">All Products</h1>

                <?php include_once './includes/all_products.php'; ?>

            </div>
            <!-- ================ PRODUCS CONAINER ENDS ================ -->

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

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="./assets/js/main.js"></script>
</body>
</html>