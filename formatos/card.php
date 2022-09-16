<?php
require_once("PRF.php");
function card($title):void{
    echo '
    <div class="card-body">
        <h5 class="card-title text-white" style="text-aling:left;">';
            if(isset($title)){
                echo $title;
            }
        echo'</h5>
    </div>
';
}