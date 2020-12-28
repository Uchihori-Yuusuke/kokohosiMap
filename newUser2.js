
  window.onload = function() {
      let name = '<?php echo $name;?>';
      let sex ='<?php echo $sex;?>';
      let mail='<?PHP echo $mail;?>'
      let pass='<?php echo $pass;?>';
      let year = '<?php echo $year;?>';
      let month = '<?php echo $month;?>';
      let day = '<?php echo $day;?>';

      document.getElementById('name').innerHTML = name;
      document.getElementById('sex').innerHTML = sex;
      
      document.getElementById('mail').innerHTML = mail;

      document.getElementById('pass').innerHTML = pass;
      
      document.getElementById('year').innerHTML = year;
      
      document.getElementById('month').innerHTML = month;
      
      document.getElementById('day').innerHTML = day;
}