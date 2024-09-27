<!DOCTYPE html>
<html>
    <head>
        <title>My WebPortal demo page</title>
    </head>
    <header>
       <img src="logo.png" width="400" height="200"/> 
        <br>
        <a class="logo" href="#"> Demo Page</a>
        
    </header>
<article>
  <header>
    <h1>RingCentral Embeddable client</h1>
    <time>26.09.2024</time>
  </header>
  <p>My company portal with embedded RingCentral plugin for Click to Call</p>
    <br>
    <br>
     <p>Phone number to test click to dial: +393485707393</p>
</article>
    <body>
        <?php echo "This is a testing page for Azure App services. It is developed in PHP"; ?>
       
    </body> 
 
     <script src="https://unpkg.com/ringcentral-c2d@1.0.0/build/index.js"></script> 
    <script>
    // Invoke embeddable dialer
      (function() {
            var rcs = document.createElement("script");
            rcs.src = "https://apps.ringcentral.com/integration/ringcentral-embeddable/latest/adapter.js?clientId=aaMs2Aa4gnGch17Vf0v6tM&disableReadText=TRUE";
            var rcs0 = document.getElementsByTagName("script")[0];
            rcs0.parentNode.insertBefore(rcs, rcs0);
                  })();

       
    // Interact with RingCentral C2D
        var clickToDial = new RingCentralC2D();
        clickToDial.on(RingCentralC2D.events.call, (phoneNumber) => {
        RCAdapter.clickToCall(phoneNumber, true);
        });
   
    </script>

        
</html>


