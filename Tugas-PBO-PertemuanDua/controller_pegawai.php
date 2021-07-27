<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"SELECT * FROM pertemuan_dua");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GetData_L (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"SELECT * FROM pertemuan_dua WHERE jenis_kelamin = 'L'; ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GetData_M (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"SELECT * FROM pertemuan_dua WHERE status = 'M'; ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GetData_BM (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"SELECT * FROM pertemuan_dua WHERE status = 'B'; ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GetData_Umursatu (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,
        "SELECT nip, nama, jenis_kelamin, tgl_lahir, status, mulai_kerja, YEAR(CURDATE())-YEAR(tgl_lahir) AS usia FROM pertemuan_dua WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 10 AND 30 ORDER BY usia ASC
        ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GetData_Umurdua (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,
        "SELECT nip, nama, jenis_kelamin, tgl_lahir, status, mulai_kerja, YEAR(CURDATE())-YEAR(tgl_lahir) AS usia FROM pertemuan_dua WHERE YEAR(CURDATE())-YEAR(tgl_lahir) BETWEEN 31 AND 45 ORDER BY usia ASC
        ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GetData_masakerjasatu (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,
        "SELECT nip, nama, jenis_kelamin, tgl_lahir, status, mulai_kerja, YEAR(CURDATE())-YEAR(mulai_kerja) AS usia FROM pertemuan_dua WHERE YEAR(CURDATE())-YEAR(mulai_kerja) BETWEEN 1 AND 5 ORDER BY usia ASC
        ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GetData_masakerjadua (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,
        "SELECT nip, nama, jenis_kelamin, tgl_lahir, status, mulai_kerja, YEAR(CURDATE())-YEAR(mulai_kerja) AS usia FROM pertemuan_dua WHERE YEAR(CURDATE())-YEAR(mulai_kerja) BETWEEN 6 AND 10 ORDER BY usia ASC
        ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    function GetData_masakerjatiga (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,
        "SELECT nip, nama, jenis_kelamin, tgl_lahir, status, mulai_kerja, YEAR(CURDATE())-YEAR(mulai_kerja) AS usia FROM pertemuan_dua WHERE YEAR(CURDATE())-YEAR(mulai_kerja) BETWEEN 11 AND 25 ORDER BY usia ASC
        ");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

    



}


?>