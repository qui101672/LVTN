<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once($_SERVER['DOCUMENT_ROOT'].'/PhpProject1/Config/connect.php');
    class user extends database{
        private $username ="";
        private $password ="";
        private $email = "";
        private $sdt = "";
        private $cmnd = "";
        private $cauhoibimat = "";
        private $cautraloi = "";
        private $ngaydangky = "";
        
        public function set_user($username){
            $this->username = $username;
        }
        public function get_user(){
            return $this->username;
        }
        public function set_pass($password){
            $this->password = $password;
        }
        public function get_pass(){
            return $this->password;
        }
        public function set_email($email){
            $this->email = $email;
        }
        public function get_email(){
            return $this->email;
        }
        public function set_sdt($sdt){
            $this->sdt = $sdt;
        }
        public function get_sdt(){
            return $this->sdt;
        }
        public function set_cmnd($cmnd){
            $this->cmnd = $cmnd;
        }
        public function get_cmnd(){
            return $this->cmnd;
        }
        public function set_cauhoi($cauhoibimat){
            $this->cauhoibimat = $cauhoibimat;
        }
        public function get_cauhoi(){
            return $this->cauhoibimat;
        }
        public function set_traloi($cautraloi){
            $this->cautraloi = $cautraloi;
        }
        public function get_traloi(){
            return $this->cautraloi;
        }
        public function set_ngaydk($ngaydangky){
            $this->ngaydangky = $ngaydangky;
        }
        public function get_ngaydk(){
            return $this->ngaydangky;
        }
        public function them_nguoidung(){
            $this->setQuery();
            return $this->executeQuery();
        }
        public function sua_nguoidung(){
            $this->setQuery();
            return $this->executeQuery();
        }
        public function xoa_nguoidung(){
            $this->setQuery();
            return $this->executeQuery();
        }
        public function thaydoi_MK(){
            $this->setQuery();
            return $this->executeQuery();
        }
        
    }
?>
