<?php

namespace App\Controllers;

use App\Models\User as UserModel;
require_once '../database/Database.php';
require_once '../helpers/utils.php';
require_once 'Controller.php';

require_once '../models/User.php';

class userSubscribe extends Controller {
  public function suscribe(){
    // Condition permettant de fair la fonction que si les paramètre ont été remplis
    if(isset($_POST['valid_inscription']))
      if(isset($_POST['sub_username']) && !empty($_POST['sub_username']) &&
         isset($_POST['sub_password']) && !empty($_POST['sub_password'])&&
         isset($_POST['sub_check_password']) && !empty($_POST['sub_check_password']))
         {
           $username = $_POST['sub_username'];
           $password = $_POST['sub_password'];
           $password2 = $_POST['sub_check_password'];
           $patternMp = '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
           $pattternUser = '';
           $passhash = password_hash($password, PASSWORD_DEFAULT);

           if ($username <= 15 ) {
             echo "Pseudo valide";
           }else{
             echo "Votre pseudo comprend plus de 15 caractère et/ou déjà pris";
           }

           // // Tableaux contenant les chemins, script, header
           // if ($_SERVER["REQUEST_METHOD"] == "POST") {
           //   extract($_POST);
           //   pretty_print_r($_POST);
           // }
         }

    $title = 'Inscription';
    render('subscribe', compact('title'));
    echo "cacauète";
  }
}
