<?php

/**
 *
 */
class enkription
{
  public function enkription_password($password)
  {
    $step_md5 = md5("#".$password."akubisa");
    $step_one = substr($step_md5,0,8);
    $step_two = substr($step_md5,8,16);
    $step_three = substr($step_md5,16,24);
    $step_four = substr($step_md5,24,32);

    $last_step = $step_three.$step_two.$step_four.$step_one;

    return $last_step;
  }
}


 ?>
