<?php
include 'includes/init.php';

$status=$user->login($_POST,$db);


if($status==='success'){
    echo json_encode(['success'=>'success',
     'message'=>'<p class="alert alert-success" >Attenticated!</p>',
     'url'=>'profile.php',
    ]);
}else if($status==='Missing_fields'){
    echo json_encode(['error'=>'error', 'message'=>'<p class="alert alert-danger" >All fields Empty</p>']);
}
else if($status==='error'){
    echo json_encode(['error'=>'error', 'message'=>'<p class="alert alert-danger" >Incorrect Email Or Password</p>;']);
}
?>