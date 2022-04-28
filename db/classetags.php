<?php
    class Tags
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
       
        public function insertDataArt($post)
        {
            $nomtag = $this->con->real_escape_string($_POST['nomtag']);
            $query="INSERT INTO `tag`(`nom_tag`) VALUES (NULL,'$nomtag')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location: paneltags?msg1=insert");
            }else{
                header("Location: paneltags?msg4=error");
            }
        }
     
        public function displayDataTags()
        {
            $query = "SELECT * FROM tag
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
        

        public function displyaRecordByIdTags($id)
        {
            $query = "SELECT * FROM article 
            LEFT JOIN `categorie` ON article.id_article = categorie.id_categorie
            INNER JOIN possede ON article.id_article = possede.id_article
            LEFT JOIN tag ON tag.id_tag = possede.id_tag
            LEFT JOIN `image` ON article.id_article = `image`.id_article
            WHERE article.id_article = '$id'";
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
            $ntag = $this->con->real_escape_string($_POST['ntag']);
            $idtag = $this->con->real_escape_string($_POST['id_tag']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE tag SET nom_tag = '$ntag' WHERE id_tag = '$idtag'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:paneltags.php?msg2=update");
            }else{
                echo "Votre demande de suppresion ne c'est pas executer!";
            }
            }
            
        }

        public function deleteRecord($idtag)
        {
            $query = "DELETE FROM tag WHERE id_tag = '$idtag'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:index.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }
    }
?>