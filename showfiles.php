<?php>
$fileList = glob('pliki/*');
 

foreach($fileList as $filename){
   echo $filename, '<br>'; 
}
