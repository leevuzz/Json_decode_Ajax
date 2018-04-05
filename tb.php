<?php 
    $json = file_get_contents("http://dev.tvu.topica.edu.vn/api/listcourse.php?userid=30229");
    $data = json_decode($json);

    echo'<table class="table table-condensed">';
    echo"<thead>";
    echo"<tr>";
    echo"<th>Course ID</th>";
    echo"<th>Course FullName</th>";
    echo"<th>Date Open</th>";
    echo"<th>Action</th>";
    echo"</tr>";
    echo"</thead>";
    echo"<tbody>";
    if(isset($data)){
    foreach($data->courses as $idx => $courses){
        echo"<tr>";
        echo"<td>$courses->courseid</td>";
        echo"<td>$courses->course_fullname</td>";
        echo "<td>$courses->dateopen</td>";
        echo'<td><a data-toggle="modal" data-target="#myModal"  class="btn btn-xs btn-primary load2" data-id="'.$courses->courseid.'"><i class="glyphicon glyphicon-cog"></i> Chi tiết</a></td>';
        echo"</tr>";
    }}
    else{
        echo "<script>alert('Sever hiện đang xảy ra sự cố !!!');
        location.reload();</script>";
    }  
    echo"</tbody>";
    echo"</table>";
     ?>