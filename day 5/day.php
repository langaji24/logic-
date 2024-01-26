<?php

function day($tanggal){
    $day = date('l', strtotime($tanggal));

    if ($day == 'Monday'){
        echo 'Senin';
    }elseif($day == 'Tuesday'){
        echo 'Selasa';
    }elseif($day == 'Wednesday'){
        echo 'Rabu';
    }elseif($day == 'Thursday'){
        echo 'Kamis';
    }elseif($day == 'Friday'){
        echo'Jumat';
    }elseif($day == 'Saturday'){
        echo'Sabtu';
    }else{
        echo'Minggu';
    }

}

day('2024-01-28');