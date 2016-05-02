<?php
class Database
{
    public $conn;
    public $dbname = "test";
    public $username = "root";
    public $password = "ian";
    public $host = "localhost";
    public function __construct()
    {
        $this->conn = mysql_connect($this->host, $this->username, $this->password);
        if (!$this->conn) {
            die("connect fail" . mysql_error());
        }
        mysql_select_db($this->dbname, $this->conn);
    }
    public function fetch($sql)
    {
        $arr = array();
        $res = mysql_query($sql, $this->conn) or die(mysql_error());
        while ($row = mysql_fetch_assoc($res)) {
            $arr[] = $row;
        }
        mysql_free_result($res);
        return $arr;
    }
    public function execute($sql)
    {
        $res = mysql_query($sql, $this->conn) or die(mysql_error());
        if (mysql_affected_rows($this->conn) > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function close_connect()
    {
        if (!empty($this->conn)) {
            mysql_close($this->conn);
        }
    }
}
?>