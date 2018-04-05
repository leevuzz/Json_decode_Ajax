<?php 
    $json = file_get_contents("http://dev.tvu.topica.edu.vn/api/detailcourse.php?courseid=".$_GET['id']);
    $data = json_decode($json);

    echo'<table class="table table-condensed">';
    echo"<thead>";
    echo"<tr>";
    echo"<th>WeekID</th>";
    echo"<th>Name</th>";
    echo"</tr>";
    echo"</thead>";
    echo"<tbody>";
    if(isset($data)){
    foreach($data->weeks as $idx => $weeks){
        echo"<tr>";
        echo"<td>$weeks->weekid</td>";
        echo"<td>$weeks->name</td>";
        echo"</tr>";
    }}  
    echo"</tbody>";
    echo"</table>";
     ?>