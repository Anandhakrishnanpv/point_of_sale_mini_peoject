<?php

class Model extends Database
{
    protected function get_allowed_columns($data)
    {
            if(!empty($this->allowed_columns)){
                foreach ($data as $key => $value) {
                    // code...
                    if (!in_array($key, $this->allowed_columns)) 
                    {
                        unset($data[$key]);
                    }
                }
        }
            return $data; // Add a semicolon at the end of this line
        
    }
    public function insert($data)
    {
        
         $clean_array=$this->get_allowed_columns($data,$this->table);
         $keys=array_keys($clean_array); 
    
         $query="insert into $this->table";
         $query .="(".implode(",",$keys).") values";
         $query .="(:".implode(",:",$keys).")";
         
         $db=new Database;
         $db->query($query,$clean_array);
         
    }
	public function update($id,$data)
	{

		$clean_array = $this->get_allowed_columns($data,$this->table);
		$keys = array_keys($clean_array);
		
		$query = "update $this->table set ";

		foreach ($keys as $column) {
			// code...
			$query .= $column . "=:".$column .",";
		}

		$query = trim($query,",");
		$query .= " where id = :id";
		$clean_array['id'] = $id;

		$db = new Database;
		$db->query($query,$clean_array);	

	}
    public function delete($id)
	{

		$query = "delete from $this->table where id = :id limit 1";
		$clean_array['id'] = $id;

		$db = new Database;
		$db->query($query,$clean_array);	

	}

    public function where($data)
    {
        $keys = array_keys($data);
    
        $query = "SELECT * FROM $this->table WHERE ";
        foreach ($keys as $key) {
            $query .= "$key = :$key AND ";
        }
        $query = rtrim($query, 'AND '); // Remove the trailing "AND"
        $db=new Database;
        return $db->query($query,$data);
    }
    public function first($data)
    {
        $keys = array_keys($data);
    
        $query = "SELECT * FROM $this->table WHERE ";
        foreach ($keys as $key) {
            $query .= "$key = :$key AND ";
        }
        $query = rtrim($query, 'AND '); // Remove the trailing "AND"
        $db=new Database;
       if($res= $db->query($query,$data))
       {
         return $res[0];
       }
        return false;
    }
    
    
    
}
?>