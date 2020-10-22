<?php 

        if(isset($_POST["submit1"])){
            $url = $_POST['search'];
            header('Location:' . $url . '.php');
        }

?>