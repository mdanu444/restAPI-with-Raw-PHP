<?php 
class Database{
    public $db; 

    function __construct(){
        $this->connection();
    }

    private function connection(){
        $this->db = new mysqli("localhost", "root", "", "students") or die("Connection Failed");
    }

    public function select($query){
        $result = $this->db->query($query) or die("Selection Query Problem");
        return $result;
    }
    public function update($query){
        $result = $this->db->query($query) or die("Update Query Problem");return $result;
    }
    public function insert($query){
        $result = $this->db->query($query) or die("Insert Query Problem");return $result;
    }
    public function delete($query){
        $result = $this->db->query($query) or die("delete Query Problem");return $result;   
    }
}
?>