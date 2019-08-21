
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/socialmedia.css">
  
		<div class="container my-auto">
          <div class="copyright text-center my-auto">
                  <ul class="social-network social-circle">
                    <li><a href="https://facebook.com" class="icoFacebook social" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com" class="icoTwitter social" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/martin-casta/" class="icoLinkedin social" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://" class="icoRss social" title="Rss"><i class="fa fa-rss"></i></a></li>
                  </ul>
                </div>
            </div>


<footer class="sticky-footer  text-dark border-top-info">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Simple <sup> Maths</sup></span>
          </div>
        </div>
      </footer>

      <script>
                window.alert = function() {};
                var defaultCSS = document.getElementById('bootstrap-css');

                function changeCSS(css) {
                  if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
                  else $('head > link').filter(':first').replaceWith(defaultCSS);
                }
                $(document).ready(function() {
                  var iframe_height = parseInt($('html').height());
                  window.parent.postMessage(iframe_height, 'http://bootsnipp.com');
                });
              </script>