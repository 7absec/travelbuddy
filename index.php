<html>
<style>
   div
   {
      width: 100%;
      height: 100%;
      background-image: url("Images/start.gif");
      background-repeat: no-repeat;
      background-position-x: center;
      background-position-y: center;
   }
</style>   
<body>
    <div></div>
    <p id="counter">6</p>
    <script>
        setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                window.location.replace("Home.php");
            }
        }, 1000);
    </script>
</body>
</html>
