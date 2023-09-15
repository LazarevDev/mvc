<?

function dd($str, $param = null){
    print_r('<pre>');
    var_dump($str);
    
    if($param == 1){
        die();
    }
}


?>