<? $p=$_SERVER['REMOTE_ADDR'];
$n=json_decode(file_get_contents('d'));
if(in_array($p,$n[1]))echo join('/',$n[0]);elseif(isset($_POST['n'])){
  $n[0][$_POST['n']]++;
  array_push($n[1],$p);file_put_contents('d',json_encode($n));
  header("Location:v.php");
}else echo'<form method=POST><input type=radio name=n value=0><input type=radio name=n value=1><input type=submit>';
