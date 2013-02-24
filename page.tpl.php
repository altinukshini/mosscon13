<?php
// $Id: page-front.tpl.php,v 1.20 2010/10/12 00:07:37 danprobo Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $styles; ?>
  
  <!--[if IE 6]><link rel="stylesheet" href="<?php echo $base_path . $directory; ?>/style.ie6.css" type="text/css" /><![endif]-->
  <?php print $scripts; ?>
  <!--[if IE 6]>
    <script type="text/javascript" src="<?php print $base_path . $directory; ?>/scripts/jquery.pngFix.js"></script>
  <![endif]-->

  <!--[if IE 6]>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(document).pngFix();
      });
    </script>
  <![endif]-->

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#superfish ul.menu").superfish({ 
            delay:       100,                           
            animation:   {opacity:'show',height:'show'},  
            speed:       'fast',                          
            autoArrows:  true,                           
            dropShadows: true                   
        });
  });

</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".con-h").equalHeights();  
  });
</script>


</head>


<body>

  <div id="page" class="page clearfix tb-terminal">

  <div id="page-deco-top" class="deco-page-top deco-page deco-top deco tb-scope tb-scope-prefer">
    <div class="width deco-width inner tb-terminal">
      <div class="layer-a layer"></div>
      <div class="layer-b layer"></div>
      <div class="layer-c layer"></div>
      <div class="layer-d layer"></div>
    </div>
  </div>
  
  <div id="page-deco-bottom" class="deco-page-bottom deco-page deco-bottom deco tb-scope tb-scope-prefer">
    <div class="width deco-width inner tb-terminal">
      <div class="layer-a layer"></div>
      <div class="layer-b layer"></div>
      <div class="layer-c layer"></div>
      <div class="layer-d layer"></div>
    </div>
  </div>


  <div class="page-width tb-scope">
    <div class="lining tb-terminal"><!-- Broken out of .page-width to avoid update issues with margin: 0 auto being undone -->



<div id="header" class="wrapper-header wrapper clearfix tb-scope">

        <?php if ($preheader_first || $preheader_second) : ?>
          <div id="preheader" class="stack-preheader stack-pre stack col-align-last-right horizontal clearfix tb-scope">
            <div class="stack-width inset tb-terminal">
    
                      <?php 
                        $colCount = 0;
                        $counter = 1;
                        if ($preheader_first) { $colCount++; }
                        if ($preheader_second) { $colCount++; }
                        if ($colCount > 1) { $gridClass = ' left'; }
                        if ($colCount == 1) { $gridClass = ' only'; }
                      ?>
                        
                      <div class="box col-<?php echo $colCount; ?> clearfix tb-terminal">
                    
                          <?php if ($preheader_first): ?>
                            <div id="preheader_first" class="region">
                            	<div class="restrict-inner">
                              	<?php print $preheader_first ?>
                              </div>
                            </div>
                          <?php endif; ?>

                          <?php if ($preheader_second): ?>
                            <div id="preheader_second" class="region">
                              <?php print $preheader_second ?>
                            </div>
                          <?php endif; ?>
                    </div>

            </div>
          </div>
        <?php endif; ?>

				<?php if ($site_name || $logo || $site_slogan): ?>

                <div id="header-first">
                	<div class="restrict-inner">
											<?php if ($logo): ?> 
                      <div class="logo">
                          <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
                          <img src="<?php print $logo ?>" alt="<?php print t('Home') ?>"/></a>
                      </div>
                      <div class="header-show-dates-location">
                        <p>May 18 - 19, 2013 | University of Louisville | Louisville, Kentucky</p>
                      </div>
                      <?php endif; ?>
                	</div>
                </div><!-- /header-first -->

                <!--<div id="header-middle">
                    <?php if ($site_name): ?><h2 class="logo-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
										<?php print $site_name; ?></a></h2><?php endif; ?>
                    <?php if ($site_slogan): ?><div class='logo-text'><?php print $site_slogan; ?></div><?php endif; ?>
                </div>--><!-- /header-middle -->

                <!-- <div id="search-box">
                    <?php print $search_box; ?>
                </div> --><!-- /search-box -->
        <?php endif; ?>
        
        <?php if ($header_region): ?>
           <div id="header-region" class="tb-region tb-scope">
            <?php print $header_region ?>
          </div>
        <?php endif; ?>
        <!-- /Custom added Regions-->



        <!-- Login/Register & RSS section in Header -->
        <!--<div id="authorize">
            <ul>
                <?php
                    global $user;
                    if ($user->uid != 0) {
                        print '<li class="first">' . t('Logged in as ') . '<a href="' . url('user/' . $user->uid) . '">' . $user->name . '</a></li>';
                        print '<li><a href="' . url('logout') . '">' . t('Logout') . '</a></li>';
                    } 
                    else {
                        print '<li class="first"><a href="' . url('user') . '">' . t('Login') . '</a></li>';
                        // print '<li><a href="' . url('user/register') . '">' . t('Register') . '</a></li>';
                    } 
                ?>
            </ul>
            <?php print $feed_icons; ?>
        </div>-->
        <!-- / Login/Register & RSS section in Header -->


        

</div> <!-- /header -->
<!-- <div style="clear:both"></div> -->


<?php if ($show_messages) { print $messages; }; ?>



      <div id="content" class="wrapper-content wrapper clearfix tb-scope">
      
            <div id="content-deco-top" class="deco-content-top deco-content deco-top deco tb-scope tb-scope-prefer">
              <div class="width deco-width inner tb-terminal">
                <div class="layer-a layer"></div>
                <div class="layer-b layer"></div>
                <div class="layer-c layer"></div>
              </div>
            </div>
            
            <div id="content-deco-bottom" class="deco-content-bottom deco-content deco-bottom deco tb-scope tb-scope-prefer">
              <div class="width deco-width inner tb-terminal">
                <div class="layer-a layer"></div>
                <div class="layer-b layer"></div>
                <div class="layer-c layer"></div>
              </div>
            </div>

            
            <?php if ($preface_first || $preface_middle || $preface_last): ?>
              <div id="precontent" class="stack-precontent stack-pre stack clearfix tb-scope">
                <div class="stack-width inset tb-terminal tb-precontent-1">
                        
                        <?php
                          $colCount = 0;
                          $counter = 1;
                          if ($preface_first) { $colCount++; }
                          if ($preface_middle) { $colCount++; }
                          if ($preface_last) { $colCount++; }
                          if ($colCount > 1) { $gridClass = ' left'; }
                          if ($colCount == 1) { $gridClass = ' only'; }
                        ?>
                          
                        <div class="box col-<?php echo $colCount; ?> clearfix tb-terminal">


                         <?php if ($preface_first || $preface_middle || $preface_last): ?>
                            <div style="clear:both"></div>
                            <div id="preface-wrapper" class="in<?php print (bool)$preface_first + (bool)$preface_middle + (bool)$preface_last; ?>">

                                <?php if ($preface_first): ?>
                                    <div class="column A">
                                        <?php print $preface_first; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($preface_middle): ?>
                                    <div class="column B">
                                        <?php print $preface_middle; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($preface_last): ?>
                                    <div class="column C">
                                        <?php print $preface_last; ?>
                                    </div>
                                <?php endif; ?>
                            <div style="clear:both"></div>
                          
                            </div>
                        <?php endif; ?>
                        <div style="clear:both"></div>

                        <?php unset($colCount); unset($counter); if(isset($gridClass)) { unset($gridClass); } ?>
                          
                        </div>
                      </div>
              </div>
            <?php endif; ?>




            <div id="content-inner" class="stack-content-inner stack clearfix tb-scope">
              <div class="stack-width inset tb-terminal">
                      <div class="box clearfix tb-terminal tb-preview-shuffle-regions">

                           <?php if (!$is_front) print $breadcrumb; ?>

                            <!-- Sidebar Left -->
                            <?php if ($left): ?>
                                  <div id="sidebar-left" class="sidebar con-h left tb-height-balance tb-region tb-scope tb-sidebar tb-left">
                                    <?php print $left ?>
                                  </div>
                            <?php endif; ?>

                            <!-- Sidebar Right -->
                            <?php if ($right): ?>
                                  <div id="sidebar-right" class="sidebar con-h right tb-height-balance tb-region tb-scope tb-sidebar tb-right">
                                    <?php print $right; ?>
                                  </div>
                            <?php endif; ?>

                        <div id="main" class="col-c con-h tb-height-balance tb-region tb-scope tb-primary">
                          <div class="pane">
                            <a id="skip-to-content-target" class="skip-to-link" title="Target of skip-to-content link"></a>

                              <?php if ($title): ?><h1 class="title"><?php print $title; ?></h1><?php endif; ?>
                              <?php print $help; ?>

                              <?php if ($tabs): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>

                              <?php if ($content_top): ?><div class="content-top"><?php print $content_top; ?></div>
                              <?php endif; ?>
                             
                             <?php if ($content): ?><div class="content-middle"><?php print $content; ?></div>
                              <?php endif; ?>
                              
                              <?php if ($content_bottom): ?><div class="content-bottom"><?php print $content_bottom; ?></div>
                              <?php endif; ?>

                          </div>
                        </div>

                      </div> <!-- /.box tb-terminal -->
              </div>

            </div> <!-- /#main -->

      </div> <!-- /#content -->




<?php if ($bottom_first || $bottom_middle || $bottom_last): ?>
    <div style="clear:both"></div>
    <div id="bottom-teaser" class="in<?php print (bool)$bottom_first + (bool)$bottom_middle + (bool)$bottom_last; ?>">
          <?php if ($bottom_first): ?>
              <div class="column A">
                <?php print $bottom_first; ?>
              </div>
          <?php endif; ?>

          <?php if ($bottom_middle): ?>
              <div class="column B">
                <?php print $bottom_middle; ?>
              </div>
          <?php endif; ?>

          <?php if ($bottom_last): ?>
              <div class="column C">
                <?php print $bottom_last; ?>
              </div>
          <?php endif; ?>
    <div style="clear:both"></div>
    </div>
<?php endif; ?>




<?php if ($bottom_1 || $bottom_2 || $bottom_3 || $bottom_4): ?>
    <div style="clear:both"></div><!-- Do not touch -->
    <div id="bottom-wrapper" class="in<?php print (bool)$bottom_1 + (bool)$bottom_2 + (bool)$bottom_3 + (bool)$bottom_4; ?>">
          <?php if ($bottom_1): ?>
              <div class="column A">
                <?php print $bottom_1; ?>
              </div>
          <?php endif; ?>

          <?php if ($bottom_2): ?>
              <div class="column B">
                <?php print $bottom_2; ?>
              </div>
          <?php endif; ?>

          <?php if ($bottom_3): ?>
              <div class="column C">
                <?php print $bottom_3; ?>
              </div>
          <?php endif; ?>

          <?php if ($bottom_4): ?>
              <div class="column D">
                <?php print $bottom_4; ?>
              </div>
          <?php endif; ?>
  <div style="clear:both"></div>
  </div><!-- Bottom -->
<?php endif; ?>
<!-- <div style="clear:both"></div> -->



<div id="footer" class="wrapper-footer wrapper clearfix tb-scope">
        
            <?php print $footer; ?>
            <?php if ($footer_message || $secondary_links): ?>
                <div id="subnav-wrapper">
                  <ul>
                    <li>
                      <?php print $footer_message; ?>
                    </li>
                    <li>
                      <?php if (isset($secondary_links)): ?>
                      <?php print theme(
                                    'links', 
                                    $secondary_links, 
                                    array(
                                      'class' => 'links',
                                      'id' => 'subnav')
                                 ); 
                      ?>
                      <?php endif; ?>
                    </li>
                  </ul>
              </div>
              <?php endif; ?>

              <div id="notice">
                  <p>
                    <span style="float:left;">
                      Powered by: <a href="http://drupal.org">Drupal</a>  -  Theme: <a href="https://github.com/altinukshini/mosscon13">MOSSCon</a>
                    </span>
                    <span style="float:right; text-align:right;">
                      The content of this website is licensed under: <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US"><img alt="Creative Commons License - CC-BY-SA 3.0" style="border-width:0;margin-bottom:-4px;" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a>
                    </span>
                  </p>
              </div>
              <?php print $closure; ?>

</div> <!-- /#footer -->



    </div> <!-- /.lining -->
  </div> <!-- /.page-width -->
</div> <!-- /#page -->

</body>
</html>