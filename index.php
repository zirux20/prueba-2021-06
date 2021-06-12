<?php
use App\Form;

require_once "./vendor/autoload.php";
//echo App\Form::generate();
$data = Form::getJson('schema.json');
    $typeAge = $data['personalData']['properties']['age']['type'];
    $typeHeight = $data['personalData']['properties']['height']['type'];
    $typeVegetarian = $data['vegetarian']['type'];
    $typebirthDate = $data['birthDate']['type'];
    $typeOccupation = $data['occupation']['type'];
?>

<!DOCTYPE html>
<html>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="name">Nombre :</label>
    <?php

       echo Form::generateInputName($data['name']); // Genera el input Nombre

    ?>
    <br>

    <label for="vegetarian">Vegetarian :</label>
    <!--<select id="vegetarian">-->
    <select id="vegetarian" name="Vegetarian">
        <?php

        switch ($typeVegetarian){
            case $typeVegetarian === 'boolean' || $typeVegetarian === 'Boolean':
                $inputVegetarian = Form::generateInputVegetarianBoolean($typeVegetarian);
                $arrayOption = json_decode($inputVegetarian);
                foreach ($arrayOption as $key => $value){
                    echo $value;
                }
                echo json_decode($inputVegetarian);
                break;
            case $typeVegetarian ==='string' || $typeVegetarian === 'array':

                if(isset($data['vegetarian']['enum']))
                {
                    $enum =$data['vegetarian']['enum'];
                    $inputVegetarian = Form::generateInputVegetarianArray($typeVegetarian,$enum);

                    $arrayRadioBtn = json_decode($inputVegetarian);
                    foreach ($arrayRadioBtn as $key => $value){
                        echo $value;
                    }

                }
                else{
                  //logica error
                }break;
            default:
            ?>
                    <option value ="YES">SI</option>
                    <option value ="NO">NO</option>
            <?php // aprovecho las ventajas de php
                break;
        }
            ?>
    </select>
    <br>
    <label for="age">Edad :</label>
        <?php
          switch ($typeAge){
              case $typeAge==='text' || $typeAge=== 'string' ||$typeAge==='array' || $typeAge==='Array':
                  echo  Form::generateInputAge($data['personalData']['properties']['age']);
                  break;
              case $typeAge === 'int' || $typeAge === 'integer' || $typeAge === 'number' || $typeAge === 'numeric':
                   echo  Form::generateInputAgeInt($data['personalData']['properties']['age']);
                  break;
              default:
        ?>
                  <input type="number" id="age" name="nombre" placeholder="Falló pero Insertalo acá">
              <?php
          }
        ?>

    <br>
    <label for="height">Height (cm) :</label>
    <?php
    switch ($typeHeight){
        case $typeHeight==='text' || $typeHeight=== 'string' ||$typeHeight==='array' || $typeHeight==='Array':
            echo  Form::generateInputHeight($data['personalData']);
            break;
        case $typeHeight === 'int' || $typeHeight === 'integer' || $typeHeight === 'number' || $typeHeight === 'numeric':
            echo  Form::generateInputHeightInt($data['personalData']);
            break;
        default:
            ?>
            <input type="text" id="name" name="nombre" placeholder="Falló pero Insertalo acá">
        <?php
    }
    ?>
    <br>
    <label for="birthDate">Birth Date :</label>
    <?php
     echo  Form::generateInputBirthDate($data['birthDate']);
    ?>

    <br>

    <label for="selNationality">Nationality :</label>
    <select name="Nationality" id="selNationality">
      <?php
          if(isset($data['nationality']['enum']))
          {
              $enum =$data['nationality']['enum'];
              $options = Form::generateInputNationality($enum);
              $nationalities = json_decode($options);
              foreach ($nationalities as $value){
                  echo $value;
              }
          }
      ?>
    </select>
    <br>
    <label for="occupation">Occupation :</label>
    <?php
    echo  $inputName = Form::generateInputOcupationNormal($typeOccupation); // Genera el input Nomb
    ?>
    <br><br>
    <input type="submit" name="submit" value="Send Formulario">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field

  if (!empty($_POST['Nombre'])){
      foreach ($_POST as $key => $value){
          echo $key .' :'.$value .'<br>';
      }
  }
}

?>
</body>
</html>




