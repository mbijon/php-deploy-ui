<?php
/**
 * GIT DEPLOYMENT SCRIPT/UI
 * Based on Gist found here:
 * https://gist.github.com/1809044
 */

// Commands
  $cmds = array(
    'git status',
  );

// Change directory
    chdir('../');

// Run the commands
  $output = '';
  foreach($cmds AS $cmd){

// Run it
    $tmp = shell_exec($cmd);

// Output it
    $output .= "<span class=\"green\">\$</span> <span class=\"blue\">{$cmd}\n</span>";
    $output .= htmlentities(trim($tmp)) . "\n";
  }

?>
<!DOCTYPE HTML>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
       <title>GIT DEPLOYMENT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
    <pre><span class="green">
                       &Ouml; ______ &Ouml;
                       |/      \|
                      [|<span class="blue">  &Theta;  &Theta;</span>  |]
                       |___==___|
                       ___|__|___
                      |       <span class="red">&hearts;</span> |
                      | |      | |
______________________|_|______|_|________________________________
</span>
<?php echo $output; ?>
    </pre>

<ul>
<li><a href="status.php">STATUS</a></li>
<li><a href="pull.php">PULL</a></li>
<li><a href="reset.php">RESET</a></li>
<li><a href="add.php">ADD</a></li>
<li><a href="commit.php">COMMIT</a></li>
<li><a href="push.php">PUSH</a></li>
<li><a href="log.php">LOG</a></li>
</ul>
</body>

</html>
