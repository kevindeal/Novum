<?php/*
Template Name: Gallery
*/
?>

<body class="nv-c-gallery"> <!--add modifier for each event-->
    <?php get_header(); ?>
    
    <div class="nv-c-onerow">

        <header>Event Name, Location </header>
    
        <p>shot by <a ref="">@suchandsuch</a></p>

        <p>
            06.08.17
        </p>

        <div class="nv-c-wrap">


            <!-- <?php echo photo_gallery(2); ?> -->
            <img class="nv-c-gallery-img" src="<?php echo get_template_directory_uri();?>/i/night-life.jpeg">

            
        </div>

        <div class="nv-c-wrap">

            <img class="nv-c-gallery-img" src="<?php echo get_template_directory_uri();?>/i/night-life.jpeg">

            
        </div>

        <div class="nv-c-wrap">

            <img class="nv-c-gallery-img" src="<?php echo get_template_directory_uri();?>/i/night-life.jpeg">

            
        </div>

        <div class="nv-c-wrap">

            <img class="nv-c-gallery-img" src="<?php echo get_template_directory_uri();?>/i/night-life.jpeg">

            
        </div>

        <footer class="nv-c-gallery-date">
                
        </footer>
    </div>

</body>