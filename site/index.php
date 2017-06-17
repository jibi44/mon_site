<!doctype HTML>
<html class="no-js" lang="fr">
  <head>
    <?php include("includes/head.php"); ?>
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar">      
    <!--[if lt IE 8]>
      <p class="browserupgrade">Votre navigateur est ancien, <a href="http://browsehappy.com/">mettez à jour votre navigateur</a> pour une meilleure expérience.</p>
    <![endif]-->
    <?php
      include("includes/preloader.php");
      include("includes/navigation.php");
      include("includes/cover.php");
      include("includes/about.php");
      include("includes/cercles.php");
      include("includes/whyMe.php");
      include("includes/services.php");
      include("includes/organisation.php");
    ?>
          <?php
            include("includes/portfolio.php");
            include("includes/contact_link.php");
            include("includes/avis.php");
          ?>
              
    <footer id="contact" class="footer-contact">         
      <?php
        include("includes/contact.php");
        include("includes/copyright.php");
      ?>
    </footer>
      <?php
        include("includes/scripts.php");
      ?>       
  </body>
</html>
