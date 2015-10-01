
<?php echo theme_js('jquery-2.1.1.js', true);?>
<?php echo theme_js('pace.min.js', true);?>
<?php echo theme_js('bootstrap.min.js', true);?>
<?php echo theme_js('classie.js', true);?>
<?php echo theme_js('cbpAnimatedHeader.js', true);?>
<?php echo theme_js('wow.min.js', true);?>
<?php echo theme_js('inspinia.js', true);?>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>

</body>
</html>