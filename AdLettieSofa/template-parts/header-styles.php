<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
<style> .u-header {
  background-image: none;
  min-height: 107px;
}
.u-header .u-image-1 {
  width: 118px;
  height: 46px;
  margin: 25px auto 0 calc(((100% - 1140px) / 2) + 22px);
}
.u-header .u-text-1 {
  background-image: none;
  margin: -39px calc(((100% - 1140px) / 2) + 669px) 0 calc(((100% - 1140px) / 2) + 164px);
}
.u-header .u-menu-1 {
  margin: -38px calc(((100% - 1140px) / 2) + -24px) 0 auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
}
.u-block-9c19-25 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-menu-close-1 {
  margin-top: 0;
  margin-bottom: 0;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
  margin-top: 0;
  margin-bottom: 0;
}
.u-block-9c19-26 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-line-1 {
  height: 3px;
  margin-top: 36px;
  margin-bottom: 0;
  transform-origin: left center 0px;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    margin-left: calc(((100% - 1140px) / 2) + 122px);
  }
  .u-header .u-text-1 {
    margin-top: 20px;
    margin-right: auto;
    margin-left: calc(((100% - 1140px) / 2) + 122px);
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -37px;
    margin-right: calc(((100% - 1140px) / 2) + 76px);
  }
}
@media (max-width: 991px) {
  .u-header .u-image-1 {
    margin-left: calc(((100% - 1140px) / 2) + 232px);
  }
  .u-header .u-text-1 {
    margin-left: calc(((100% - 1140px) / 2) + 232px);
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 186px);
  }
}
@media (max-width: 767px) {
  .u-header .u-image-1 {
    margin-left: calc(((100% - 1140px) / 2) + 322px);
  }
  .u-header .u-text-1 {
    margin-left: calc(((100% - 1140px) / 2) + 322px);
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 276px);
  }
}
@media (max-width: 575px) {
  .u-header .u-image-1 {
    margin-left: calc(((100% - 1140px) / 2) + 422px);
  }
  .u-header .u-text-1 {
    margin-left: calc(((100% - 1140px) / 2) + 422px);
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 366px);
  }
}</style>
