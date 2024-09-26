<!DOCTYPE html>
<html>
    <head>
        <title>MyWebPortal demo page</title>
    </head>
    <header>
        <a class="logo" href="#">Demo Page!</a>
        <img src="logo.png" width="300" height="200"/>
    </header>
<article>
  <header>
    <h1>RingCentral Embeddable client</h1>
    <time>26.09.2024</time>
  </header>
  <p>My company portal with embedded RingCentral plugin for Click to Call</p>
</article>
    <body>
        <?php echo "This is a testing page for Azure App services. It is developed in PHP"; ?>
    </body>

   
    
</html>

<script>
  (function() {
    var rcs = document.createElement("script");
    rcs.src = "https://apps.ringcentral.com/integration/ringcentral-embeddable/latest/adapter.js";
    var rcs0 = document.getElementsByTagName("script")[0];
    rcs0.parentNode.insertBefore(rcs, rcs0);
  })();
</script>
