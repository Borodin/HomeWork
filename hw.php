<?php $n=json_decode(file_get_contents('data.json'));if(in_array($_SERVER['REMOTE_ADDR'],$n->{'ip'})){echo join('/', $n->{'votes'});}elseif(isset($_POST['n'])){$n->{'votes'}[$_POST['n']]++;array_push($n->{'ip'}, $_SERVER['REMOTE_ADDR']);file_put_contents('data.json', json_encode($n));header ("Location: hw.php");}else echo '<form method="POST"><input type="radio"name="n"value="0"><input type="radio"name="n"value="1"><input type="submit"></form>';