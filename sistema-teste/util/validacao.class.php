<?php
class Validacao{

  public static function validarNome($v){
    $exp = "/^[A-zÁ-ü ]{2,50}$/";
    return preg_match($exp,$v);
  }
    public static function validarEmail($v){
      return filter_var($v,FILTER_VALIDATE_EMAIL);    
  }

  // public static function validarEmail($v){
  //   return filter_var($v,FILTER_VALIDATE_EMAIL);
  // }//fecha validarEmail
}
