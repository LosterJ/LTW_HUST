<?php

class Product
{
    private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "lab10"; 
    private $dbConnect = false;

    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }

    private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result)) {
			$data[]=$row;            
		}
		return $data;
	}

    public function getItemList(){
		$sqlQuery = "
			SELECT * FROM item";
		return  $this->getData($sqlQuery);	
	}

	public function getItem($itemId){
		$sqlQuery = "
			SELECT * FROM item
			WHERE id='".$itemId."'";
		return  $this->getData($sqlQuery);	
	}

    public function addToCart($itemId){
        $insertCart = "INSERT INTO cart (itemId, created, modified) VALUES ('".$itemId."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
		mysqli_query($this->dbConnect, $insertCart);
	}

    public function getCartList(){
		$sqlQuery = "
			SELECT * FROM item INNER JOIN cart WHERE item.id = cart.itemId";
		return  $this->getData($sqlQuery);	
	}

    public function DeleteCart($cartId){
        $deleteCart = "DELETE FROM cart WHERE cartId='".$cartId."'";
		mysqli_query($this->dbConnect, $deleteCart);
	}
}