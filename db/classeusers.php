<?php
    class Users
    {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "1234";
        private $database   = "tcconstruct";
        public  $con;
        
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
            return $this->con;
            }
        }
       
        public function insertData($post)
        {   
            $unom = $this->con->real_escape_string($_POST['nomuser']);
            $uprenom = $this->con->real_escape_string($_POST['prenomuser']);
            $umail = $this->con->real_escape_string($_POST['mailuser']);
            $umdp = $this->con->real_escape_string($_POST['passworduser']);
            $umdpc = $this->con->real_escape_string($_POST['passwordcuser']);
            $query="INSERT INTO users(nom,prenom,mail,PASSWORD,id_role) VALUES('$unom','$uprenom','$umail','$umdp',1)";
            $sql = $this->con->query($query);
            
            if ($sql==true) {
                header("Location: panelusers.php?msg1=insert");
                if ($umdp != $umdpc) 
                {
                echo "Mot de passe non identique";
                header("Location: addusers.php?msg4=error");
            }else{
                echo "Enregistration echoué !";
            }

             }
            
        }


        public function displayData()
        {
            $query = "SELECT * FROM users
            INNER JOIN `role` ON users.id_role = `role`.id_role
            ";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
            }
             return $data;
            }else{
             echo "No found records";
            }
        }


        public function displyaRecordById($id)
        {
            $query = "SELECT * FROM users 
            INNER JOIN `role` ON users.id_role = `role`.id_role
            WHERE id_users = '$id'";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }

        
 
        public function updateRecord($postData)
        {
            $name = $this->con->real_escape_string($_POST['unom']);
            $prenom = $this->con->real_escape_string($_POST['uprenom']);
            $mail = $this->con->real_escape_string($_POST['umail']);
            $id = $this->con->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE users SET nom = '$name', prenom = '$prenom', mail = '$mail' WHERE id_users = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:panelusers.php?msg2=update");
            }else{
                echo "Votre demande de suppresion ne c'est pas executer!";
            }
            }
            
        }

        public function deleteRecord($id)
        {
            $query = "DELETE FROM users WHERE id_users = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:panelusers.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }
    }
?>