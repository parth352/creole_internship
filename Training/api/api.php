<?php

class API
{
    private $connect = '';
    function __construct()
    {
        $this->database_connection();
    }

    function database_connection(){
        $this->connect = new PDO("mysqli:host=localhost;dbname=form_data","root","");
    }
    
    function fetch_all()
    {
        $query ="SELECT * FROM USER_LIST";
        $statement =$this->connect->prepare($query);
    
        if($statement->execute())
        {
            while($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $data[] = $row;
            }
            return $data;
        }
    }
}

?>