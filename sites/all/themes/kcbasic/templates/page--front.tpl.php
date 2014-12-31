
  <!-- ______________________ HEADER _______________________ -->
<div id="header-full">
  <header id="header">
  <div id="bg-logo" style="position:absolute; z-index:15px; right:200px;"><img src="<?php print $base_path.path_to_theme(); ?>/images/di_background_icon.png" width="149" height="125" /></div>
    <div class="container">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">

          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
              </div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>

        </div>
      <?php endif; ?>

      <?php if ($page['header']): ?>
        <div id="header-region">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>
    </div>
  </header> <!-- /header -->
</div> <!-- head -->

  <!-- ______________________ NAVAGATION _______________________ -->

<div id="navigation-full">
  <?php if ($main_menu || $secondary_menu): ?>
    <nav id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";}
      if (!empty($secondary_menu)) {print " with-secondary";} ?>">
      <div class="container">
		<?php print render($page['navigation']); ?>
      </div>
    </nav> <!-- /navigation -->
  <?php endif; ?>
</div>

  <!-- ______________________ PAGE _______________________ -->

<div id="page-full">
  <div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
      <div class="container">
        <section id="content"> 
            <div id="content-area">
              <?php print render($page['front_content']) ?>
            </div>  
        </section> <!-- /content-inner /content -->
  
        <?php if ($page['sidebar_first']): ?>
          <aside id="sidebar-first" class="column sidebar first">
            <?php print render($page['sidebar_first']); ?>
          </aside>
        <?php endif; ?> <!-- /sidebar-first -->
  
        <?php if ($page['sidebar_second']): ?>
          <aside id="sidebar-second" class="column sidebar second">
            <?php print render($page['sidebar_second']); ?>
          </aside>
        <?php endif; ?> <!-- /sidebar-second -->
      </div>
    </div> <!-- /main -->
  </div> <!-- /page -->
</div>  

  <!-- ______________________ FOOTER _______________________ -->
<div id="footer-full">
  <?php if ($page['footer']): ?>
    <footer id="footer">
      <div class="container">
      <?php print render($page['footer']); ?>
      </div>
    </footer> <!-- /footer -->
  <?php endif; ?>
</div>