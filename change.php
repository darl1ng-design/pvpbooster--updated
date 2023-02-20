<?php
session_start();
require "conn.php";
            function verify($oldpassword, $newpassword, $newpassword2, $conn){
            $select = "SELECT user_password from users where user_password = '".$oldpassword."'";
            $res = $conn->query($select);
            if(strlen($newpassword) < 10 || strlen($newpassword2) < 10){
                $status = 'short';
                return $status;
                exit();
            }
            elseif(preg_match('/\s/', $newpassword) || preg_match('/\s/', $newpassword2)){
                $status = 'whitespace';
                return $status;
                exit();
            }
            elseif($newpassword != $newpassword2 || $oldpassword == $newpassword || $oldpassword == $newpassword2){
                $status = 'nomatch';
                return $status;
                exit();
            }
            elseif($res->num_rows > 0){
                $status = 'git';
                return $status;
                exit();
            }
            $status = 'niegit';
            return $status;
            exit();
        }

        $oldpassword = mysqli_real_escape_string($conn, $_POST["oldpassword"]);
        $newpassword = mysqli_real_escape_string($conn, $_POST["newpassword"]);
        $newpassword2 = mysqli_real_escape_string($conn, $_POST["new2password"]);

        function update($oldpassword, $newpassword, $newpassword2, $conn){
        
        $info = verify($oldpassword, $newpassword, $newpassword2, $conn);
        if($info == 'short' || $info == 'whitespace' || $info == 'nomatch' || $info == 'niegit'){
            header("location: profile.php?mode=$info");
            exit();
        }

        $update = "Update users SET user_password = '".$newpassword2."' where user_nickname = '".$_SESSION['username']."'";
        $res2 = $conn->query($update);
        if($res2){
            header("location:profile.php?mode=changed");
            exit();
        }
}
update($oldpassword, $newpassword, $newpassword2, $conn)
?> 