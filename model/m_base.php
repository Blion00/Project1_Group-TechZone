<?php

class BaseModel {
    public $db;

    public function __construct() {
        try {
            $host = 'localhost:3307';
            $dbname = 'techzone';
            $username = 'root'; 
            $password = ''; 
            
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo("Kết nối thành công");
        } catch (PDOException $e) {
            echo("Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage());
        }
    }
    
    public function getAllCategories() {
        $stmt = $this->db->prepare("SELECT * FROM danhmuc");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByCategory($ma_danhMuc) {
        $stmt = $this->db->prepare("SELECT * FROM sanpham WHERE ma_danhMuc = :ma_danhMuc");
        $stmt->bindParam(':ma_danhMuc', $ma_danhMuc, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
