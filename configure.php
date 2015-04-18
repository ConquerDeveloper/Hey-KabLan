<?php
class Conectar {
    private $host;
    private $user;
    private $pass;
    public function __construct($localhost, $root, $blank){
        $this->host = $localhost;
        $this->user = $root;
        $this->pass = $blank;
    }
    public function Conexion(){
        $con = mysql_connect($this->host, $this->user, $this->pass);
        mysql_select_db('heykablan');
        if(!$con){
            ?>
            <h1><?php echo 'Se produjo un error en la conexión'?></h1>
            <?php
        }
    }
}
?>