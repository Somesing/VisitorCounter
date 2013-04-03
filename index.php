<html>
  <head>
    <title>  PHP HELLO WORLD </title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'?>
    <?php echo 'Number of visitors:'?>
    <?php $arg1 = passthru("./num_visitors.py"); echo $arg1;?>
    <?php $arg2 = exec("./visitors+1.py");?>
    <?php $useragent = $_SERVER['HTTP_USER_AGENT'];
    //Running out of time, going to use dumb way to increment browser count 
          if(preg_match('|MSIE([0-9].[0-9]{1,2})|',$useragent,$matched))
          {
            $browser_version=$matched[1];
            $browser='IE';
            exec("./IE.py");
          }elseif(preg_match('|Opera([0-9].[0-9]{1,2})|',$useragent,$matched))          {
            $browser_version=$matched[1];
            $browser='Opera';
            exec("./Opera.py");
          }elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched))
          {
            $browser_version=$matched[1];
            $browser='Firefox';
            exec("./Firefox.py");
          }elseif(preg_match('|Safari/([0-9]\.]+)|',$useragent,$matched))
          {
            $browser_version=$matched[1];
            $browser='Safari';
            exec("./Safari.py");
          }else
          {
            //browser not recognized
            $browser_version = 0;
            $browser='other';
            exec("./other.py");
          }
          
          print"<p>Your web browser: $browser$browser_version<p>";
          $arg3 =  exec("./browser_popular.py"); echo("Most visitors to this site use: $arg3");
    ?>
  </body>
</html>
