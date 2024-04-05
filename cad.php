</php
include conexao.php;
$nome=$_POST{nome};
$data=$_POST{data};
$email=$_POST{email};
$senha=passworld_hash($_POST{senha},PASSWORLD_DEFALT)
