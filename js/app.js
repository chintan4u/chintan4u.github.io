
//To check add to homescreen icon is added or not
$(window).on("load", function () {

  $(window).on("beforeinstallprompt", function(event) {

    document.getElementById("sw-register-state").textContent = "✕";

    // e.userChoice will return a Promise. For more details read: http://www.html5rocks.com/en/tutorials/es6/promises/
    event.userChoice.then(function(result) {
      console.log(result.outcome);

      if(result.outcome == "dismissed") {
        console.log("Dismissed add to homescreen prompt.");
        document.getElementById("sw-register-state").textContent = "✕";
      }
      else {
        console.log("Added to homescreen.");
        document.getElementById("sw-register-state").textContent = "✓";
      }
    });

  });
});

