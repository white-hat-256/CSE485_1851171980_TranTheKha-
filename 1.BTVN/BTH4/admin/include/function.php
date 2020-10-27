<?php  
    function getAllEmps(){
        global $conn;
        $sql="SELECT* FROM employees";
        $result = mysqli_query($conn,$sql);
        $Emps = mysqli_fetch_all($result);
        return $Emps;
    }
    function deleteEmp($id){
        global $conn;
        $sql = "DELETE FROM employees WHERE id =' $id '";
        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }
    }
    function getOneEmp($id){
		global $conn;
		$sql="SELECT * FROM employees WHERE id='$id'";
		$result= mysqli_query($conn,$sql);
		$employees= mysqli_fetch_assoc($result);
		return $employees;
    }
    function updateEmp($id, $name, $description, $salary, $gender, $birthday){
        global $conn;
        $sql = "UPDATE employees SET name='$name', description='$description', salary='$salary',
            gender='$gender', birthday='$birthday' WHERE id='$id'";
        mysqli_query($conn, $sql);
    }
?>
