<?php 
    require('./db.php');

    
    if(isset($_POST['info-submit'])){
        
        $name = $_POST['name'];
        $father_name = $_POST['father_name'];
        $mother_name = $_POST['mother_name'];
        $roll = $_POST['roll'];
        $regi = $_POST['regi'];
        $department = $_POST['department'];
        $session = $_POST['session'];
        $blood = $_POST['blood_group'];
        $shift = $_POST['shift'];
        $contact = $_POST['contact'];

        // echo $name, $father_name, $mother_name, $roll, $regi, $department, $session, $blood, $shift, $contact;
        // die();

        // For Image Upload
        $target_dir ="uploads/";
        
        $target_file = $target_dir.basename($_FILES["img"] ["name"]);

        $check = getimagesize($_FILES["img"]["tmp_name"]);
        $target_dir ="uploads/";

        $move = move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

        
        // image upload end
        $sql = "INSERT INTO students_info (
        name, 
        father, 
        mother, 
        contact, 
        blood, 
        roll, 
        regi, 
        department, 
        season, 
        shift, 
        img) values (
        '$name', 
        '$father_name', 
        '$mother_name', 
        '$contact',
        '$blood',
        '$roll',
        '$regi',
        '$department',
        '$session',
        '$shift',
        '$target_file')";
    
        $query= mysqli_query($conn, $sql);
    
        if($query){
            header('Location: ../index.php?success=Insert-Success');
        }else{
            header('Location: ../index.php?success=Insert-Error'. mysqli_error($conn));
        }
    }else{
        echo'Somethink is wrong!';

    }
?>