<?php
function titles(){
    $title=wp_title('|',true,'right');
    if(is_home()){
        echo 'PON DESIGN';
    }else{
        echo $title.'';
    }
};
?>