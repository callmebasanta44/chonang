  <?php
  $ends=$post->ico_end_date;
   echo "<script>

      function countdown(){      
        var now = new Date();
        var eventDate = new Date('";
        
       echo $ends . "');

        var currentTiime = now.getTime();
        var eventTime = eventDate.getTime();

        var remTime = eventTime - currentTiime;

        var s = Math.floor(remTime / 1000);
        var m = Math.floor(s / 60);
        var h = Math.floor(m / 60);
        var d = Math.floor(h / 24);

        h %= 24;
        m %= 60;
        s %= 60;

        h = (h < 10) ? '0' + h : h;
        m = (m < 10) ? '0' + m : m;
        s = (s < 10) ? '0' + s : s;

        document.getElementById('days').textContent = d;
        document.getElementById('days').innerText = d;

        document.getElementById('hours').textContent = h;
        document.getElementById('minutes').textContent = m;
        document.getElementById('seconds').textContent = s;

        setTimeout(countdown, 1000);
      }
    </script>";
    ?>