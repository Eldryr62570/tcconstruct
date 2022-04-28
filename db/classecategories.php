<?php
    class Categories
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
       
        public function insertDataCat($post)
        {
            $nomcat = $this->con->real_escape_string($_POST['titreart']);
            $query="INSERT INTO `categorie`(`nom_categorie`) VALUES (NULL,'$nomcat')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location: panelarticle?msg1=insert");
            }else{
                header("Location: addarticles?msg4=error");
            }
        }
     
        public function displayDataCat()
        {
            $query = "SELECT * FROM categorie
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
        

        public function displyaRecordByIdCat($idcat)
        {
            $query = "SELECT * FROM categorie
            WHERE categorie.id_categorie = '$idcat'";
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
            $nomcategorie = $this->con->real_escape_string($_POST['nomcategorie']);
            $idcat = $this->con->real_escape_string($_POST['id_categorie']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE categorie SET nom_categorie = '$nomcategorie' WHERE id_categorie = '$idcat'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:panelcategorie.php?msg2=update");
            }else{
                echo "Votre demande de suppresion ne c'est pas executer!";
            }
            }
            
        }

        public function deleteRecord($idcat)
        {
            $query = "DELETE FROM categorie WHERE id_categorie = '$idcat'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:index.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }
    }
?>