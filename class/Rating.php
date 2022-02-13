<?php
class Rating{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "root";
    private $database  = "kidumskillnew";
	private $itemUsersTable = 'users';
	private $htmlTable = 'html';
	private $cssTable = 'css';
	private $coursesTable = 'courses';
	private $phpmysqlTable = 'phpmysql';
	private $JsJqTable = 'jsjq';

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
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}

	public function getHtmlList(){
		$sqlQuery = "
			SELECT * FROM ".$this->htmlTable;
		return  $this->getData($sqlQuery);
	}
	public function getHtml($itemId){
		$sqlQuery = "
			SELECT * FROM ".$this->htmlTable."
			WHERE id='".$itemId."'";
		return  $this->getData($sqlQuery);
	}

	public function getCssList(){
		$sqlQuery = "
			SELECT * FROM ".$this->cssTable;
		return  $this->getData($sqlQuery);
	}
	public function getCss($cssId){
		$sqlQuery = "
			SELECT * FROM ".$this->cssTable."
			WHERE id='".$cssId."'";
		return  $this->getData($sqlQuery);
	}


	public function getJsJqList(){
		$sqlQuery = "
			SELECT * FROM ".$this->JsJqTable;
		return  $this->getData($sqlQuery);
	}
	public function getJsJq($JsJqId){
		$sqlQuery = "
			SELECT * FROM ".$this->JsJqTable."
			WHERE id='".$JsJqId."'";
		return  $this->getData($sqlQuery);
	}


	public function getCourseList(){
		$sqlQuery = "
			SELECT * FROM ".$this->coursesTable;
		return  $this->getData($sqlQuery);
	}
	public function getCourse($courseId){
		$sqlQuery = "
			SELECT * FROM ".$this->coursesTable."
			WHERE id='".$courseId."'";
		return  $this->getData($sqlQuery);
	}

	public function getPhpMysqlList(){
		$sqlQuery = "
			SELECT * FROM ".$this->phpmysqlTable;
		return  $this->getData($sqlQuery);
	}
	public function getPhpMysql($phpmysqlId){
		$sqlQuery = "
			SELECT * FROM ".$this->phpmysqlTable."
			WHERE id='".$phpmysqlId."'";
		return  $this->getData($sqlQuery);
	}


	public function users(){
		$sqlQuery = "
			SELECT * FROM ".$this->$itemUsersTable;
		return  $this->getData($sqlQuery);
	}

// end

// end
}

?>
