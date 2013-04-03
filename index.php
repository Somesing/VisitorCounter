<html>
  <head>
    <title>  PHP HELLO WORLD </title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'?>
    <?php echo 'Number of visitors:'?>
    <?php $arg1 = passthru("./num_visitors.py"); echo $arg1;?>
    <?php $arg2 = exec("./visitors+1.py")?>
  </body>
</html>
