<?php


namespace App\Traits;


trait GenerateUsername
{
    private function generateUsername($first_name, $last_name, $other_name){
      return   strtolower($first_name.'.'.substr($last_name,'0','3').(!empty($other_name)?'_'.substr($other_name,'0',2):""));
    }

}
