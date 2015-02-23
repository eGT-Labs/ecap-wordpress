 <?php
      ini_set('display_startup_errors',1);
      ini_set('display_errors',1);
      error_reporting(-1);
      
       $link = mysql_connect("egtlabsecap.ciq9ul9lvuj5.us-east-1.rds.amazonaws.com","egtlabsecap","6cc7c5a5a21978","ecap_wp_db");
       if (!$link) {
       die('Could not connect: ' . mysql_error());
       }
      echo 'Connected successfully';
      mysql_close($link);
      ?>
