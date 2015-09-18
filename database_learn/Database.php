<?php
//namespace Database;  Currently causes an error in the extension on line 6

include './dbConfig.php';

class Database extends Dbconfig    {

public $connectionString;
public $dataSet;
private $sqlQuery;
	
protected $connection = null;
//protected $query;
	
    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;

function Mysql() {
    $this -> connectionString = NULL;
    $this -> sqlQuery = NULL;
    $this -> dataSet = NULL;

    $dbPara = new Dbconfig();
    $this -> databaseName = $dbPara -> dbName;
    $this -> hostName = $dbPara -> serverName;
    $this -> userName = $dbPara -> userName;
    $this -> passCode = $dbPara ->passCode;
    $dbPara = NULL;
}

public function dbConnect() {
//	$this->connectionString = "mysql:host=" . $this->hostName . ";dbname=" . $this->databaseName . ";charset=utf8mb4," . $this->userName . "," . $this->passCode;
	try {
		$this->connection = new PDO('mysql:host=localhost;dbname=cubScout;charset=utf8mb4;' . $this->userName,$this->passCode);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo $e->getMessage() . ' connect';
	}
	return $this->connection;
//	$this -> connectionString = mysqli_init();
//	$this -> connectionString ->options (MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
//    $this -> connectionString = mysql_connect($this -> serverName,$this -> userName,$this -> passCode);
//    mysql_select_db($this -> databaseName,$this -> connectionString);
//    return $this -> connectionString;
}

function dbDisconnect() {
    $this -> connectionString = NULL;
    $this -> sqlQuery = NULL;
    $this -> dataSet = NULL;
            $this -> databaseName = NULL;
            $this -> hostName = NULL;
            $this -> userName = NULL;
            $this -> passCode = NULL;
}

function selectAll($tableName)  {
//	dbConnect();
	try {
		$query = $this->connection->prepare("SELECT * FROM $tableName");
//		$query = $this->connection->prepare("SELECT * FROM   $tableName ");
		$query->execute();
	} catch (Exception $e) {
		echo $e->getMessage() . ' selectAll';
	}
//    $this -> sqlQuery = 'SELECT * FROM '.$this -> databaseName.'.'.$tableName;
//    $this -> dataSet = mysql_query($this -> sqlQuery,$this -> connectionString);
    return $query->fetchAll();
}

function selectWhere($tableName,$rowName,$operator,$value,$valueType)   {
    $this -> sqlQuery = 'SELECT * FROM '.$tableName.' WHERE '.$rowName.' '.$operator.' ';
    if($valueType == 'int') {
        $this -> sqlQuery .= $value;
    }
    else if($valueType == 'char')   {
        $this -> sqlQuery .= "'".$value."'";
    }
    $this -> dataSet = mysql_query($this -> sqlQuery,$this -> connectionString);
    $this -> sqlQuery = NULL;
    return $this -> dataSet;
    #return $this -> sqlQuery;
}

function insertInto($tableName,$values) {
    $i = NULL;

    $this -> sqlQuery = 'INSERT INTO '.$tableName.' VALUES (';
    $i = 0;
    while($values[$i]["val"] != NULL && $values[$i]["type"] != NULL)    {
        if($values[$i]["type"] == "char")   {
            $this -> sqlQuery .= "'";
            $this -> sqlQuery .= $values[$i]["val"];
            $this -> sqlQuery .= "'";
        }
        else if($values[$i]["type"] == 'int')   {
            $this -> sqlQuery .= $values[$i]["val"];
        }
        $i++;
        if($values[$i]["val"] != NULL)  {
            $this -> sqlQuery .= ',';
        }
    }
    $this -> sqlQuery .= ')';
            #echo $this -> sqlQuery;
    mysql_query($this -> sqlQuery,$this ->connectionString);
            return $this -> sqlQuery;
    #$this -> sqlQuery = NULL;
}

function selectFreeRun($query)  {
    $this -> dataSet = mysql_query($query,$this -> connectionString);
    return $this -> dataSet;
}

function freeRun($query)    {
    return mysql_query($query,$this -> connectionString);
  }


function test() {
	$end = 'Hello World';
	return $end;
	var_dump ($end);
	}
}