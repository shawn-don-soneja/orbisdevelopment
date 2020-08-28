<?php
if(!empty($_POST)){
    $mysqli = mysqli_connect("localhost","u877379798_corona","Zendera1!","u877379798_corona"); 
// end candidate send email
//candidate temporaries set

//delete previous temp info if any


    $sql = 'INSERT INTO `userInfo`(`Fever`, `Headache`, `Aches`, `Fatigue`, `Extreme Exhaustion`, `Stuffy/Runny`, `Sneezing`, `Sore Throat`, `diarrhoea`, `Cough`, `Chest Discomfort`, `Age`, `Gender`, `PMH`, `Smoking Status`, `Travel History`, `Travel Contact`, `Sick Person Contact`, `Flu Status`, `Longitude`, `Latitude`) VALUES ("'.$_POST['Fever'].'","'.$_POST['Headache'].'","'.$_POST['Aches'].'","'.$_POST['Fatigue'].'","'.$_POST['ExtremeExhaustion'].'","'.$_POST['Stuffy/Runny'].'","'.$_POST['Sneezing'].'","'.$_POST['Sore Throat'].'","'.$_POST['diarrhoea'].'","'.$_POST['Cough'].'","'.$_POST['Chest Discomfort'].'","'.$_POST['Age'].'","'.$_POST['Gender'].'","'.$_POST['PMH'].'","'.$_POST['Smoking Status'].'","'.$_POST['Travel History'].'","'.$_POST['Travel Contact'].'","'.$_POST['Sick Person Contact'].'","'.$_POST['Flu Status'].'","'.$_POST['Longitude'].'","'.$_POST['Latitude'].'")';
    $result = mysqli_query($mysqli,$sql);
    
    if(empty($result)){
        print("Post Unsuccessful");
    }
    
}

?>