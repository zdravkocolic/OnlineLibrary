<?php 
function inputElement($icon, $holder, $name, $value){
    $ele = "
    
    <div class=\"input-group mb-2\">
    <div class=\"input-group-prepend\">
        <div class=\"input-group-text bg-warning\">$icon</i></div>
    </div>
    <input type=\"text\" name='$name' value='$value' autocomplete=\"off\" placeholder='$holder' class=\"form-control\">
</div>";
echo $ele;
}



function buttonElement($btnid, $styleclass, $text, $name, $attr){
    $btn ="
        <button name='$name' '$attr' class='$styleclass' id='$btnid'>$text</button>
    
    ";
    echo $btn;
}

