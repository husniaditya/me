<!DOCTYPE html>
<html lang="zxx">
<head>
    <?php require "files/head/head.php"; ?>
</head>
<body class="dark-version" data-target="#nav-main" data-spy="scroll">
    <!--Preloader-->
    <div class="preloader">
        <div class="loader">
            <i class="fa fa-spinner fa-pulse"></i>
        </div> <!-- /.loader-->
    </div><!--/.preloader-->
    
    <!--**************** Site Header ***********************-->
    <header id="home" class="site-header">
        <?php include "files/header/header.php"; ?>

        <div id="sticky-header"></div><!--/#sticky-header-->

        <!--====About Section
        ============================================-->
        <?php include "files/home/home.php"; ?>
    </header><!--/.site-header-->
    
    
    <!--**************** Main Content ***********************-->
    <div class="main-contant">
        <!--====Services Section
        ============================================-->
        <?php include "files/service/service.php"; ?>
        
        <!--====Skill Section
        ============================================-->
        <?php include "files/skill/skill.php"; ?>

        <!--====Training Section
        ============================================-->
        <?php include "files/training/training.php"; ?>
        
        <!--====Counter Score Section
        ============================================-->
        <?php include "files/score/score.php"; ?>
        
        
        <!--====Portfolio Section
        ============================================-->
        <?php include "files/portfolio/portfolio.php"; ?>
        
        <!--====Customer Review Section
        ============================================-->
        <?php include "files/reviews/reviews.php"; ?>
        
        <!--====Latest Post Section
        ============================================-->
        <?php include "files/blog/blog.php"; ?>
        
        <!--====Contact Us Section
        ============================================-->
        <?php include "files/contact/contact.php"; ?>
    </div><!--/.main-contetn-->
    
     <!--**************** Site Footer ***********************-->
    <footer class="site-footer">
        <!--========Footer Top==========-->
        <?php include "files/footer/footer.php"; ?>
    </footer>
    
</body>
</html>
