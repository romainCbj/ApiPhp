<?php


class Users {
    public $identifiant ;
    public $nom ;
    public $prenom;
    public $age;
    
    
    function GetValue($_id, $_nom, $_prenom, $_age){
        $this->identifiant = $_id;
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->age = $_age;
        
        echo ('Bonjour ' . $this->identifiant);
   }
    
   function GetUser($pdo, $id){
       try{
           
            $stmt = $pdo->prepare("SELECT * FROM Users WHERE Identifiant ='".$id."'");
            $stmt->execute();
            $result = $stmt->get_result();
            echo 'test';
            $row = $result->fetch_assoc();
            echo $row['Prenom'];

           
            echo (" yesy");
       } catch (Exception $ex) {
           echo 'oups';
       }
       
   }
      function GetAllUsers($pdo){
       try{
           
            $stmt = $pdo->prepare("SELECT * FROM Users");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["Identifiant"]. " - Name: " . $row["Prenom"]. " " . $row["Nom"]. "<br>" ;
            }
            for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
                $result->data_seek($row_no);
                var_dump($result->fetch_assoc());
                echo $result->fetch_assoc()["Prenom"];
               
            }

           

       } catch (Exception $ex) {
           echo 'oups';
       }
       
   }
   
    
}
?>