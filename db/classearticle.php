<?php
    class Articles
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
            $atitre = $this->con->real_escape_string($_POST['titrearticle']);
            $aimgp = $this->con->real_escape_string($_POST['imgparticle']);
            $acontenu = $this->con->real_escape_string($_POST['contenuarticle']);
            $query="INSERT INTO article(titre_article,imgp_article,contenu_article,date_article,statut_article) VALUES('$atitre','$aimgp','$acontenu',NULL,0)";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:panelarticle?msg1=insert");
            }else{
                echo "Enregistration echoué !";
            }
        }
     
        public function displayData()
        {
            $query = "SELECT * FROM article
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
            $query = "SELECT * FROM article 
            INNER JOIN `categorie` ON article.id_article = categorie.id_categorie
            WHERE id_article = '$id'";
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
            $atitre = $this->con->real_escape_string($_POST['titrearticle']);
            $aimgp = $this->con->real_escape_string($_POST['imgparticle']);
            $acontenu = $this->con->real_escape_string($_POST['contenuarticle']);
            $id = $this->con->real_escape_string($_POST['id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE article SET titre_article = '$atitre', imgp_article = '$aimgp', contenu_article = '$acontenu' WHERE id_article = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:panelarticle.php?msg2=update");
            }else{
                echo "Votre demande de suppresion ne c'est pas executer!";
            }
            }
            
        }

        public function deleteRecord($id)
        {
            $query = "DELETE FROM article WHERE id_article = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:index.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }
    }
?>