<!DOCTYPE HTML>

<head>
    <title> NovumPHL| Events</title>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/j/social.js"></script> 

    <link href="<?php echo get_template_directory_uri();?>/c/main.css" rel="stylesheet">

    <?php wp_head();?>

</head>

<body class="nv-c-body" id="site-content">

    
    <section class="nv-c-header">

        <h1 class="nv-c-header_logo">
            <a href="<?php echo get_template_directory_uri();?>index.php"><img src="<?php echo get_template_directory_uri();?>/i/novum.svg" class="nv-c-introLogo-text" alt="Novum-logo"></img></a>
        </h1>

        <nav class="nv-c-nav">
            
            <ul class="nv-c-nav_list">
                <?php wp_list_pages('&title_li'); ?><!--code pulls pages from wordpress-->
                <!-- <li class="Nav_item"><a href="/about/">About</a></li>
                <li class="Nav_item"><a href="/events/">Events</a></li>
                <li class="Nav_item"><a href="/content/">Content</a></li>
                <li class="Nav_item"><a href="/merch/">Merch</a></li> -->
                
            </ul>

            <?php require 'social.php'; ?>
            
        </nav>
    </section>

    