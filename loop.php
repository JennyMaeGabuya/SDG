<?php 
for ($i = 1; $i <= 17; $i++) {
    $class = "sdg" . $i;
    $src = "sdg/sdg" . $i . ".php";
    echo "<button class='{$class}' id='sdg{$i}' name='sdg{$i}'>
        <iframe class='{$class}' src='{$src}' frameborder='1'></iframe>
    </button>";
}
?>