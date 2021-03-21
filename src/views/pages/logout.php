
<?php

$token = $_SESSION['token'];

if(!empty($token) && isset($token)){
    unset($token);
    $this->redirect('/login');
}

 //header("Location:$base/login");