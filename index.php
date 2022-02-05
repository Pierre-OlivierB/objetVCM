<!DOCTYPE html>
<html>

<?php
//loc = vue user souhaitée
$loc = filter_input(INPUT_GET,"loc");
//action = action user souhaitée
$action = filter_input(INPUT_GET, "action");

//Instanciation controller responsive 
switch($loc){
    case 'user':
        include('controller/C_User.php');
        $control = new C_User($action);
        break;
    default:
        break;
}

//Si demande controller:
if (isset($control)) {
    //données du controller
    $data = $control->getData();
    //vue responsive
    $view = $control->getView();
    include('vue/common/template.php');
} else{
    echo "La route spécifié n'existe pas";
}
 ?>


</html>