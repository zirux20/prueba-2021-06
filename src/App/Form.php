<?php
namespace App;

require_once($_SERVER['DOCUMENT_ROOT'].'/src/App/Helpers.php');
class Form{

    public static function  getJson($filename): array{

        $data =   moldingJson($filename);
        return $data['properties'];
    }
    /*  generateInputName() Se Encargara de Generar el
        <input> Name a partir de una $data
        :   devuelve un string con <input> nombre
    */
    public  static function generateInputName($data): string //Encargada de Generar el <input> para Nombre
    {

        $response = '<input type="text" MINLENGTH="'.$data['minLength'] .'" id="name" name="Nombre" placeholder="' . $data['description'] . '"> ';
        return $response;
    }

    /*  generateInputVegetarianBoolean () Se Encargara de Generar el
        <input> Vegetarian a partir de una $data
       :   devuelve un string con <option> según opción
      */
    public  static function generateInputVegetarianBoolean($dataType): string //Encargada de Generar el <input> para Vegetarian a partir de una $data  :   devuelve un string
    {
      if ( !is_null($dataType) )
        {
            $optionSi= '<option value="YES" >YES</option>';
            $optionNo= '<option  value="NO" >NO</option>';
            $response = [ $optionSi ,$optionNo];
        }
      return isset($response) ? json_encode($response) : $response = 'error_on_dataType';
    }

    /*  generateInputVegetarianBoolean() Se Encargara de Generar el
           <input> Vegetarian a partir de una $data
        :   devuelve un string con tantos <option> según la cantidad que contenga
      */
    public  static function generateInputVegetarianArray($dataType, $enum = null): string //Encargada de Generar el <input> para Vegetarian si el type recibido es 'string' o 'array     :   devuelve un string
    {
        if (  $dataType=== 'array' || $dataType=== 'Array' ||$dataType=== 'string' ) {
            if (!is_null($enum)){
                foreach ($enum as $value){
                    $option ='<option  value ="'. $value .'">'. $value .'</option>';
                   $response[] = $option;
                }
            }
        }
        return isset($response) ? json_encode($response) : $response = 'error_on_dataType';
    }

    /*  generateInputAgeInt() Se Encargara de Generar el
             <input> Age a partir de una $data
          :   devuelve un string con <input> de type="number"
    */
    public  static function generateInputAgeInt($data): string //Encargada de Generar el <input> para Age si el type recibido es 'int' o 'numeric'     :   devuelve un string
    {
        if (!is_null($data)){
            $response ='<input type="number" id="age" name="Age" placeholder="' . $data['description'] . '" required > ';
        }
        return isset($response) ? $response : $response = 'error_on_dataType';
    }

    /*  generateInputAgeInt() Se Encargara de Generar el
         <input> Age a partir de una $data
      :   devuelve un string con <input> de type="text"
     */
    public  static function generateInputAge($data): string //Encargada de Generar el <input> para Age si el type recibido es 'boolean'     :   devuelve un string
    {
        if (!is_null($data)){
            $response ='<input type="text" id="age" name="Age" placeholder="'. $data['description'] .'"  required > ';
        }

        return isset($response) ? $response : $response = 'error_on_dataType';
    }
    /*  generateInputBirthDate () Se Encargara de Generar el
         <input> BirthDate a partir de una $data
         :   devuelve un string con <input> de type="text"
     */
    public  static function generateInputHeightInt($data): string //Encargada de Generar el <input> para Height si el type recibido es 'int' o 'numeric'     :   devuelve un string
    {
        if (!is_null($data)){

            $response ='<input type="number" id="height" name="Height" placeholder=" Please Enter your height" required >';
        }
        return isset($response) ? $response : $response = 'error_on_dataType';
    }
    /*  generateInputBirthDate () Se Encargara de Generar el
            <input> BirthDate a partir de una $data
            :   devuelve un string con <input> de type="numeric"
    */
    public  static function generateInputHeight($data): string //Encargada de Generar el <input> para Height a partir de una $data  :  devuelve un string
    {
        if (!is_null($data)){
            $response ='<input type="text" id="height" name=Height" placeholder=" Please Enter your height" required >';
        }

        return isset($response) ? $response : $response = 'error_on_dataType';
    }

    /*  generateInputBirthDate () Se Encargara de Generar el
             <input> BirthDate a partir de una $data
                        :   devuelve un string
     */
    public  static function generateInputBirthDate($data): string

    {

        if (!is_null($data)){
            $response ='<input type="'. $data['format'] .'"  id="birthDate" name="BirthDate"  required >';
        }

        return isset($response) ? $response : $response = 'error_on_dataType';
    }

    /*  generateInputNationality() Se Encargará de Generar el
           <input> Nationality a partir de un $enum con contenido
                      :   devuelve un string
   */

    public  static function generateInputNationality( $enum): string //Encargada de Generar el <input> para Vegetarian si el type recibido es 'string' o 'array     :   devuelve un string
    {

            if (!is_null($enum)){
                foreach ($enum as $value){
                    $option ='<option value ="'. $value .'">'. $value .'</option>';
                    $response[] = $option;
                }
            }

        return isset($response) ? json_encode($response) : $response = 'error_on_dataType';
    }

    /*  generateInputOcupationNormal() Se Encargará de Generar el
       <input> Occupation siempre y cuando $type no sea null
                  :   devuelve un string
    */
    public  static function generateInputOcupationNormal( $type): string //Encargada de Generar el <input> para Vegetarian si el type recibido es 'string' o 'array     :   devuelve un string
    {
        if (!is_null($type)){
            $response =  '<input type="text"  id="occupation" name="Occupation" placeholder="Enter your Occupation" required >';

        }
        return isset($response) ? $response : $response = 'error_on_dataType';
    }


}