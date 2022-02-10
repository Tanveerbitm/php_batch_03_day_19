<?php
require_once 'vendor/autoload.php';
use App\classes\DataEntry;
use App\classes\Authorized;
use App\classes\Authentication;
use App\classes\Prime;
use App\classes\Series;


$authorization = new Authorized();
$permission = $authorization->accessMiddleware();


if(isset($_GET['pages'])) {
    if ($_GET['pages'] == 'login') {
        if($permission){
            include 'pages/dashboard.php';
        }else{
            include 'pages/login.php';
        }
    }elseif ($_GET['pages'] == 'registration') {
        if($permission){
            include 'pages/dashboard.php';
        }else{
            include 'pages/registration.php';
        }
    }elseif ($_GET['pages'] == 'dashboard') {
        if($permission){
            include 'pages/dashboard.php';
        }else{
            include 'pages/login.php';
        }
    }elseif($_GET['pages'] == 'signout'){
        $authentication = new Authentication();
        $authentication->signOut();
    }elseif($_GET['pages'] == 'data-entry'){
        if($permission){
            include 'pages/dataentry.php';
        }else{
            include 'pages/login.php';
        }
    }elseif($_GET['pages'] == 'all-data'){
        if($permission){
            $dataObj = new DataEntry();
            if(isset($_GET['status'])){
                if($_GET['status'] == 'update'){
//                    $dataObj->update($_GET['id']);
                }elseif($_GET['status'] == 'delete'){
                    $dataObj->delete($_GET['id']);
                }
            }
            $dataObj = new DataEntry();
            $allData = $dataObj->getAllData();
            include 'pages/alldata.php';
        }else{
            include 'pages/login.php';
        }
    } elseif($_GET['pages'] == 'task'){
        if($permission){
            include 'pages/task.php';
        }else{
            include 'pages/login.php';
        }
    }
    else{
        if($permission){
            include 'pages/dashboard.php';
        }else{
            include 'pages/login.php';
        }
    }
}
elseif (isset($_POST['login_btn'])){
    $authentication = new Authentication();
    $msg = $authentication->signIn($_POST);
    include 'pages/login.php';
}elseif(isset($_POST['reg_btn'])){
    $authentication = new Authentication();
    $msg = $authentication->signUp($_POST);
    include 'pages/registration.php';
}elseif (isset($_POST['dataentry_btn'])){
    $dataEntry = new DataEntry($_POST);
    $msg =  $dataEntry->index();
    include 'pages/dataentry.php';
}elseif (isset($_POST['prm_btn'])){
    $prime = new Prime($_POST);
    $result = $prime->index();
    include 'pages/task.php';
}
elseif (isset($_POST['srs_btn'])){
    $series = new Series($_POST);
    $results = $series->index();
    include 'pages/task.php';
}
