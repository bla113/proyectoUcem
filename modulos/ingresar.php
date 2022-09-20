
<?php
try{
    $base=new PDO("mysql:host=localhost; dbname=ucem","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM estudiante WHERE Usuario= :login AND Password= :password";
    $resultado=$base->prepare($sql);
    
  
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));

    $resultado->bindValue(":login",$login);
    $resultado->bindValue(":password",$password);
    $resultado->execute();
    
  
 
    $numeroRegistro=$resultado->rowCount();

    if ($numeroRegistro !=0){

       session_start();

       $_SESSION["iniciarSesion"] = "ok";
      
        $_SESSION['login']=$_POST["login"];


      header("Location: ../inicio");

    }else{
      echo '<script>
      
      window.location = "../login";

    
    </script>'; 

    

  

       
       
        
    }

   

    

}
catch(Exception $e){
die("Error; ".$e->getMessage());
}

    ?>