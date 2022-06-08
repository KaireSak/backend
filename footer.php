<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php global $hideFooter; if (!$hideFooter) { ?>
        <footer class="u-align-center-sm u-align-center-xs u-clearfix u-footer u-palette-5-light-1" id="sec-1836">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
      <div class="u-gutter-0 u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-size-12 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-container-layout-1">
              <img class="u-image u-image-default u-image-1" src="<?php echo get_template_directory_uri(); ?>/images/Logo_eksam.svg" alt="" data-image-width="344" data-image-height="238">
            </div>
          </div>
          <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-12 u-layout-cell-2">
            <div class="u-container-layout u-valign-top u-container-layout-2"><!--position-->
              <?php $sidebar_html = theme_sidebar(array(
            'id' => 'area_1',
            'template' => <<<WIDGET_TEMPLATE
                <div class="u-block">
                  <div class="u-block-container u-clearfix"></div>
                </div>
WIDGET_TEMPLATE
        )); ?> <div data-position="Widget Area 1" class="u-position u-position-1"><!--block-->
                <?php if ($sidebar_html) { echo stylingDefaultControls($sidebar_html); } else { ?> <div class="u-block">
                  <div class="u-block-container u-clearfix"></div>
                </div> <?php } ?><!--/block-->
              </div><!--/position-->
              <div class="u-align-center u-clearfix u-group-elements u-group-elements-1">
                <h6 class="u-text u-text-1"> Abiks</h6>
                <a href="https://nicepage.cc" class="u-border-none u-btn u-button-style u-none u-btn-1">KKK</a>
                <a href="https://nicepage.cc" class="u-border-none u-btn u-button-style u-none u-btn-2">KKK</a>
              </div>
            </div>
          </div>
          <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-12 u-layout-cell-3">
            <div class="u-container-layout u-valign-top u-container-layout-3"><!--position-->
              <?php $sidebar_html = theme_sidebar(array(
            'id' => 'area_2',
            'template' => <<<WIDGET_TEMPLATE
                <div class="u-block">
                  <div class="u-block-container u-clearfix"></div>
                </div>
WIDGET_TEMPLATE
        )); ?> <div data-position="Widget Area 2" class="u-position u-position-2"><!--block-->
                <?php if ($sidebar_html) { echo stylingDefaultControls($sidebar_html); } else { ?> <div class="u-block">
                  <div class="u-block-container u-clearfix"></div>
                </div> <?php } ?><!--/block-->
              </div><!--/position-->
              <div class="u-align-center u-clearfix u-group-elements u-group-elements-2">
                <h6 class="u-text u-text-2"> Abiks</h6>
                <a href="https://nicepage.cc" class="u-border-none u-btn u-button-style u-none u-btn-3">KKK</a>
                <a href="https://nicepage.cc" class="u-border-none u-btn u-button-style u-none u-btn-4">KKK</a>
              </div>
            </div>
          </div>
          <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-11-md u-size-11-sm u-size-11-xs u-size-12-lg u-size-12-xl u-layout-cell-4">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xs u-container-layout-4">
              <div class="u-align-center u-clearfix u-group-elements u-group-elements-3">
                <h6 class="u-text u-text-3"> Abiks</h6>
                <a href="https://nicepage.cc" class="u-border-none u-btn u-button-style u-none u-btn-5">KKK</a>
                <a href="https://nicepage.cc" class="u-border-none u-btn u-button-style u-none u-btn-6">KKK</a>
              </div>
            </div>
          </div>
          <div class="u-align-center u-container-style u-layout-cell u-size-12-lg u-size-12-xl u-size-13-md u-size-13-sm u-size-13-xs u-layout-cell-5">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xs u-container-layout-5">
              <p class="u-custom-font u-text u-text-default u-text-4"> KS Disain OÜ<br>+372 0000 0000<br> info@ksdisain.ee 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="u-custom-font u-text u-text-default u-text-5">@ Kaire Sakeus 2022</p>
    <p class="u-custom-font u-text u-text-default u-text-6">KMS20 TPT</p>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <a class="u-link" href="https://nicepage.com/wordpress-themes" target="_blank">
        <span>WordPress Theme</span>
            </a>
        <p class="u-text"><span>created with</span></p>
        <a class="u-link" href="https://nicepage.com/wordpress-website-builder" target="_blank"><span>WordPress Website Builder</span></a>.
    </section>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
