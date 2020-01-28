<?php defined( '_JEXEC' ) or die;
  include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
?>

<!doctype html>
<html lang="<?php echo $this->language; ?>">

  <head>
    <jdoc:include type="head" />

    <script type="text/javascript">
    	var _gaq = _gaq || [];
    	_gaq.push(['_setAccount', 'UA-33483802-1']);
    	_gaq.push(['_setDomainName', 'transalley.com']);
    	_gaq.push(['_setAllowLinker', true]);
    	_gaq.push(['_trackPageview']);
    	(function() {
    		var ga = document.createElement('script');
    		ga.type = 'text/javascript';
    		ga.async = true;
    		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    		var s = document.getElementsByTagName('script')[0];
    		s.parentNode.insertBefore(ga, s);
    	})();
    </script>
  </head>

  <body class="site <?php echo $active->alias . ($pageclass ? ' ' . $pageclass : ''); ?>">

    <header id="header">
      <nav id="second-nav" class="navbar navbar-expand-mdlg">
        <div class="container d-none d-mdlg-flex justify-content-mdlg-end">
          <jdoc:include type="modules" name="navbar-top" />
        </div>
      </nav>

      <div class="brand">
        <div class="container d-flex my-1 justify-content-between justify-content-mdlg-start">
          <a class="navbar-brand" href="<?php echo $this->baseurl; ?>/"><img src="templates/transalley-v2/img/banner-logo.svg" alt="<?php echo $app->getCfg('sitename'); ?>" /></a>
          <button class="navbar-toggler d-mdlg-none" type="button" data-toggle="collapse" data-target="#nav-modules" aria-controls="nav-modules" aria-expanded="false" aria-label="Navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
        </div>
      </div>

      <nav id="main-nav" class="navbar navbar-expand-mdlg">
        <div id="nav-modules" class="collapse navbar-collapse">
          <div class="container d-block">
            <jdoc:include type="modules" name="navbar" />
          </div>
        </div>
      </nav>
    </header>

    <main id="main" class="mb-5">
      <jdoc:include type="component" />
    </main>

    <footer id="footer">
      <div class="container-fluid main-footer">
        <div class="d-flex justify-content-center justify-content-lg-between py-3">
          <jdoc:include type="modules" name="footer-main" />
        </div>
      </div>

      <div class="container-fluid second-footer">
        <div class="py-3">
          <jdoc:include type="modules" name="footer-below" />
        </div>
      </div>
    </footer>

    <jdoc:include type="modules" name="debug" />

    <!-- <script src="templates/transalley-v2/build/app.js"></script>
    <script src="templates/transalley-v2/js/script-min.js"></script> -->
  </body>
</html>
