
<?php

class ExerciseString {

    public $check1;
    public $check2;


    function checkValidString($str){
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


    function readFile($rea){
          $file = file_get_contents($rea);

          $checkString = $this->checkValidString($file);

         if($checkString == true){
            if($rea == 'file1.txt' && $rea=='file2.txt'){
                $check1 =true;
                $check2=true;
        }else{
          $check1 =false;
          $check2=false;
          
        }
    }
}


    function writeFile($txt){
       $openFile= fopen("result_file.txt", "w") or die ("Không thể mở file!");

       fwrite($openFile,$txt);
       fclose($openFile);

    }

}

$object1 = new ExerciseString();
$object1 ->readFile('file1.txt');
$object2 = new ExerciseString();
$object2 ->readFile('file2.txt');

if($object1->check1==true){
    $object1->writeFile('Chuỗi 1 hợp lệ!');
}else{
    $object1->writeFile('Chuỗi 1 không hợp lệ!');
}

if($object2->check2==true){
    $file= file_get_contents('file2.txt');
    $a= substr_count($file, ".");
    $object2->writeFile("Chuỗi 2 hợp lệ, chuỗi có".$a." câu");
    echo ("Chuỗi 2 hợp lệ, chuỗi có".$a." câu");

}else{
    $file= file_get_contents('file2.txt');
    $a= substr_count($file, ".");
     $object2->writeFile("Chuỗi 2 không hợp lệ, chuỗi có".$a." câu");
     echo ("Chuỗi 2 không hợp lệ, chuỗi có ".$a." câu");
}