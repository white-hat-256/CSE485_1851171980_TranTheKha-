<?php
    // User Functions
    function getAllsubject(){
        global $conn;
        $sql = "SELECT * FROM subject";
        $result = mysqli_query($conn,$sql);
        $subject = mysqli_fetch_all($result);
        return $subject;
    }
    // function getOneUser($id){
    //     global $conn;
    //     $sql = "SELECT * FROM users WHERE userid = '$id'";
    //     $result = mysqli_query($conn,$sql);
    //     $user = mysqli_fetch_assoc($result);
    //     return $user;
    // }
    
    // function deleteUser($id){
    //     global $conn;
    //     $sql = "DELETE FROM users WHERE userid = '$id'";
    //     if(mysqli_query($conn,$sql))
    //         return TRUE;
    //     else
    //         return FALSE;
    // }


?>