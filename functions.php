<?php 
dd("hello");
$conn = mysqli_connect('localhost','sawhtut','sawhtut','mvc_learning');


    if(isset($_POST['action'])){
        dd($_POST['sql']);
        index($_POST['sql']);
    }




function index ($sql):array{
    $sql = $_POST['sql'];
    $query = mysqli_query( $GLOBALS['conn'], $sql);

$lists = [];

while ($row = mysqli_fetch_assoc($query)) {
    $lists[] = $row;
};
return $lists;
}



function dd($data,$showType = false):void{
    echo "<pre style='background-color: #1d1d1d;color: #cdcdcd; padding: 20px; margin: 10px; border-radius: 10px; line-height: 1.2rem;'>";
    if($showType){
        var_dump($data);
    }else{
        print_r($data);
    }
    echo  "</pre>";
    die();
}



function uniqueCode($lists){
    $code = [] ; 

    foreach ($lists as $list){
        $code [] = $list["nrc_code"];
    }
    return 
    array_unique($code);
    
    ; 
}