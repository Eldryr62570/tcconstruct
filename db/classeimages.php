<?php
    class Images
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
       
        public function insertDataImg($post)
        {
            $filename = $this->con->real_escape_string($_POST['file_name']);
            $titreimg = $this->con->real_escape_string($_POST['titre_image']);
            $query="INSERT INTO `image`(`file_name`, `titre_image`, `uploaded_on`, `id_article`) VALUES (NULL,'$filename','$titreimg',NULL,?)";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location: panelarticle?msg1=insert");
            }else{
                header("Location: addarticles?msg4=error");
            }
        }
     
        public function displayDataImg()
        {
            $query = "SELECT * FROM `image`
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
        

        public function displyaRecordByIdImg($idimg)
        {
            $query = "SELECT * FROM `image` 
            WHERE image.id_image = '$idimg'";
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
            $filenameu = $this->con->real_escape_string($_POST['file_nameu']);
            $titreimgu = $this->con->real_escape_string($_POST['titre_imageu']);
            $idimg = $this->con->real_escape_string($_POST['id_image']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE `image` SET file_name = '$filenameu', titre_image = '$titreimgu' WHERE id_image = '$idimg'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:panelimages.php?msg2=update");
            }else{
                echo "Votre demande de suppresion ne c'est pas executer!";
            }
            }
            
        }

        public function deleteRecord($idimage)
        {
            $query = "DELETE FROM `image` WHERE id_image = '$idimage'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:panelimages.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }
    }
?>