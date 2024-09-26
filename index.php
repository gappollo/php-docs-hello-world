<!DOCTYPE html>
<html>
    <head>
        <title>MyWebPortal demo page</title>
    </head>
    
    <body>
        <?php echo "Hello! This is a basic testing page for Azure App services. It is developed in PHP"; ?>
    </body>

    <iframe width="300" height="500" id="rc-widget" allow="autoplay; microphone"
        src="https://apps.ringcentral.com/integration/ringcentral-embeddable/latest/app.html">
    </iframe>
    
</html>

<script>
  (function() {
    var rcs = document.createElement("script");
    rcs.src = "https://apps.ringcentral.com/integration/ringcentral-embeddable/latest/adapter.js";
    var rcs0 = document.getElementsByTagName("script")[0];
    rcs0.parentNode.insertBefore(rcs, rcs0);
  })();
</script>
