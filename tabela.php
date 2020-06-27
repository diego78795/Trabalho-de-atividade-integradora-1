<?php
include('conexao.php');

$sql ="update acoes.acoes set Hora=NOW();";
$result2 = mysqli_query($conexao, $sql);
	
for ($i=1;$i<=10;$i++){
  $query = "select * from acoes.acoes where id_acao='{$i}'";
  $result = mysqli_query($conexao, $query);
  $Dados = mysqli_fetch_assoc($result);
  $Cresc[$i] = $Dados['Cresc'];
  $Nome[$i] = $Dados['Nome'];
  $Cod[$i] = $Dados['Codigo'];
  $Url[$i] = $Dados['Url'];
  $Valor[$i] = $Dados['Valor'];
  $Hora[$i] = $Dados['Hora'];
}
for ($j=1;$j<=5;$j++){
  $CMaior[$j]=0;
  $CMaior[0]=0;
  $CMaior[-1]=0;
  $CMaior[-2]=0;
  $CMaior[-3]=0;
  $CMaior[-4]=0;
  for ($i=1;$i<=10;$i++){
	  if($CMaior[$j]<$Cresc[$i] & $Cresc[$i] != $CMaior[$j-1] & $Cresc[$i] != $CMaior[$j-2] & $Cresc[$i] != $CMaior[$j-3] & $Cresc[$i] != $CMaior[$j-4] & $Cresc[$i] != $CMaior[$j-5]){
          $CMaior[$j]=$Cresc[$i];
		  $NMaior[$j]=$Nome[$i];
		  $CodMaior[$j]=$Cod[$i];
		  $UMaior[$j]=$Url[$i];
		  $VMaior[$j]=$Valor[$i];
		  $HMaior[$j]=$Hora[$i];
	  }
  }
}

for ($j=1;$j<=5;$j++){
	  if($CMaior[$j]==0){
          $CMaior[$j]=0;
		  $NMaior[$j]=0;
		  $CodMaior[$j]=0;
		  $UMaior[$j]=0;
		  $VMaior[$j]=0;
		  $HMaior[$j]=0;
  }
}

for ($j=1;$j<=5;$j++){
  $CMenor[$j]=10000000;
  $CMenor[0]=10000000;
  $CMenor[-1]=10000000;
  $CMenor[-2]=10000000;
  $CMenor[-3]=10000000;
  $CMenor[-4]=10000000;
  for ($i=1;$i<=10;$i++){
	  if($CMenor[$j]>$Cresc[$i] & $Cresc[$i] != $CMenor[$j-1] & $Cresc[$i] != $CMenor[$j-2] & $Cresc[$i] != $CMenor[$j-3] & $Cresc[$i] != $CMenor[$j-4] & $Cresc[$i] != $CMenor[$j-5]){
          $CMenor[$j]=$Cresc[$i];
		  $NMenor[$j]=$Nome[$i];
		  $CodMenor[$j]=$Cod[$i];
		  $UMenor[$j]=$Url[$i];
		  $VMenor[$j]=$Valor[$i];
		  $HMenor[$j]=$Hora[$i];
	  }
  }
}

for ($j=1;$j<=5;$j++){
	  if($CMenor[$j]==10000000 || $CMenor[$j]>0){
          $CMenor[$j]=0;
		  $NMenor[$j]=0;
		  $CodMenor[$j]=0;
		  $UMenor[$j]=0;
		  $VMenor[$j]=0;
		  $HMenor[$j]=0;
  }
}

?>