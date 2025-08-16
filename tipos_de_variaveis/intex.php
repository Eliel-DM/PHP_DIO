<html>
  <head>
    Módulo 01
  </head>
  <body>
    <?php
      $string = "Curso na DIO";
      $numeros = 50;
      $arr = array("php","java");
      date_default_timezone_set('America/Sao_Paulo'); // Definir um fuso horário
      $data = date("d/m/Y H:i:s");
    ?>
    <h4>Esse é o curso de tipos de variáveis em PHP.</h4>
    <h4>Essa é uma variável do tipo String e para realizar a implementação é feita da seguinte forma:  $string = "Curso na DIO";</h4>
    <?php
      echo $string;
    ?>
    <h4>Essa é uma variável do tipo números/integer e para realizar a imprementação é feita da seguinte forma: $numeros = 50; </h4>
    <?php
      echo $numeros;
    ?>
    <h4>Essa é uma variável do tipo array, para implementar um array em uma variável é utilizado desta forma: $arr = array("php","java"); </h4>
    <?php
      print_r($arr);
    ?>
    <h4>Essa é uma variável do tipo datas, para realizar a implementação é feita através de uma função própria do PHP da seguinte forma: $data = date("d/m/Y H:i:s")</h4>
    <?php
      print $data;
    ?>
  </body>  
</html>
