
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
  <h1>
     <?php
    $um = "desleixado"; 
    $dois= "esforçado";
    $um1 = "nunca estudava, não fazia nenhum dever de casa ia sempre mal nas provas";
    $dois2 = "estudava todos os dias,fazia os deveres de casa com capricho, sempre tirava boas notas nas provas e ia bem na prova \u{1f970}";
    $um11= "ficavam muito orgulhosos de seu desempenho na escola.";
    $historiaAtual = 1;

    if ($historiaAtual === 1) {
      echo "<p>João sempre foi um aluno $dois!</p>";
      echo "<p>Ele $dois2.</p>";
      echo "<p> Seus pais $um11.</p>";
     
    } if  ($historiaAtual = 2) {
      echo "<p>João sempre foi um aluno $dois!</p>";
      echo "<p>Ele $dois2.</p>";
      echo "<p> Seus pais $um11.</p>";
      
    }
     if  ($historiaAtual = 3) {
      echo "<p>João sempre foi um aluno $um!</p>";
      echo "<p>Ele $um1.</p>";
      echo "<p> Seus pais $um11.</p>";
    
    }
    ?>
  </h1>
</body>
</html>
