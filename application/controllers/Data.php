<?php
/**
 * Created by PhpStorm.
 * User: yash
 * Date: 3/6/16
 * Time: 5:33 PM
 */
class Data extends CI_Controller{
   function get_temp(){
       $this->load->model('user_model');
       $temp = $this->user_model->get_temp();
       foreach ($temp as $v){
           echo $v["temperature"];
           echo "<br>";
           echo unix_to_human($v["timestamp"]);
//           echo unix_to_human(gmt_to_local($v["timestamp"],"UM8",FALSE));
           echo "<br>";

       }
//       echo "<pre>";
//       print_r($temp);
//       echo "</pre>";
   }
}
?>