<?php
class Db {
    private $db;
    
    function __construct() {
        if (file_exists(DataDir().'foo.db')) {
            $this->db = new SQLite3(DataDir().'foo.db');
        }
        else {
            $this->db = new SQLite3(DataDir().'foo.db');
            $this->Create();
        }
    }
    
    function __destruct() {
        $this->db->close();
    }
    
    private function Create() {
        $this->db->exec('CREATE TABLE foo (bar STRING)');
    }

    function Insert() {
        $this->db->exec("INSERT INTO foo (bar) VALUES ('This is a test')");
    }

    function View() {
        $rows = array();
        $result = $this->db->query('SELECT * FROM foo');
        while ($row = $result->fetchArray())
            $rows[] = $row;

        return $rows;
    }
}
