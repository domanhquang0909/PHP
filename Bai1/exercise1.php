<?php

function CheckValidString($str){
       $restaurant= "restaurant";
       $book = "book";

       if(strpos($str,$book)=== false && strpos($str,$restaurant) !== false){
           return true ;
       }elseif(strpos($str,$restaurant)===false && strpos($str,$book) !== false){
           return true;
       }else{
           return false;
       }


}


function Check(){
        $file1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 
            1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and 
            more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

        $file2 = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration 
        in some form, by injected humour, or randomised words which don't look even slightly believable.";

    $check1 = CheckValidString($file1);
    $check2 = CheckValidString($file2);

    if($check1 === true){
        echo "Chuỗi 1 hợp lệ, Chuỗi có " ;
        echo substr_count($file1,".").' câu</br>';
    
    }else{
        echo "Chuỗi không hợp lệ";
    }

    if($check2 === true){
        echo "Chuỗi 2 hợp lệ, Chuỗi có ";
        echo substr_count($file2,".").' câu';
    
    }else{
        echo "Chuỗi không hợp lệ";
    }
}
Check();
?>
