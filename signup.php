<?php
include 'includes/init.php';

$status=$user->signup($_POST,$db);


if($status==='success'){
    echo json_encode(['success'=>'success',
     'message'=>'<p class="alert alert-success" >You are signed up successfully! </p>',
     'signout'=>1,
    ]);
}else if($status==='Missing_fields'){
    echo json_encode(['error'=>'error', 'message'=>'<p class="alert alert-danger" >All fields Empty</p>',
    


]);
}
else if($status==='email_exists'){
    echo json_encode(['error'=>'error', 'message'=>'<p class="alert alert-danger" >Email Already Exists</p>']);
}
else if($status==='mismatch_password'){
    echo json_encode(['error'=>'error', 'message'=>'<p class="alert alert-danger" >Password and confirm password are not same</p>']);
}
else if($status==='error'){
    echo json_encode(['error'=>'error', 'message'=>'<p class="alert alert-danger" >Failed To sign up</p>;']);
}
?>