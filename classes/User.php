<?php

class User{

    public function login($user,$db){
        if(empty($user['email'])|| empty($user['password'])){
            return 'Missing_fields';
        }
        $sql="SELECT * FROM `mytable` WHERE `email`=?";
        $statement=$db->prepare($sql);
        if(is_object($statement)){
            $statement->bindparam(1,$user['email'],PDO::PARAM_STR);
            $statement->execute();

            if($row= $statement->fetch(PDO::FETCH_OBJ)){
                
                if(password_verify($user['password'],  $row->password)){   
                    $_SESSION['logged_in']=[
                            'id'=> $row->id,
                            'name'=> $row->name,
                    
                    ];
                    return 'success';
                }
                return 'error';
            }   
        }

    }
    public function signup($user,$db){
        // email exsistance
        // password and confirm password
        // all fields mandatory 
        if(empty($user['name']) || empty($user['email']) || empty($user['password'])){
            return 'Missing_fields';
        }else if ($user['password']!==$user['cpass']) {
            return 'mismatch_password';
        }else if($this->emailExists($user['email'],$db)){
            return 'email_exists';
        }
        else{
            $sql="INSERT INTO `mytable`(`name`, `email`, `password`, `verification_code`)
             VALUES (?,?,?,?)";
            $statement = $db->prepare($sql);
            

            if(is_object($statement)){
                $hash=password_hash($user['password'], PASSWORD_DEFAULT);
                $code = generateCode();
                $statement->bindParam(1,$user['name'],PDO::PARAM_STR);
                $statement->bindParam(2,$user['email'],PDO::PARAM_STR);
                $statement->bindParam(3,$hash,PDO::PARAM_STR);
                $statement->bindParam(4,$code,PDO::PARAM_STR);
                $statement->execute();

                if ($statement->rowCount()) {
                    return 'success';
                }
            }
        }
        return 'error';
    }

    private function emailExists($email,$db){

        $sql="SELECT * FROM `mytable` WHERE `email`= ? ";

        $statement= $db->prepare($sql);

        if(is_object($statement)){

         $statement->bindparam(1,$email, PDO::PARAM_STR);
         $statement->execute();


         if ($row = $statement->fetch(PDO::FETCH_OBJ)) {
            return true;
         }

        }
        return false;

    }
}

$user= new User;


?>