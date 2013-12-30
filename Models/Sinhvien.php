<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once($_SERVER['DOCUMENT_ROOT'] . '/LVTN/Config/connect.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/LVTN/Models/Nguoidung.php');

class Sinhvien extends Nguoidung {

    private $mssv = "";
    private $email = "";
    private $sdt = "";
    private $gioitinh = "";

    public function set_mssv($cmnd) {
        $this->cmnd = $cmnd;
    }

    public function get_mssv() {
        return $this->cmnd;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_sdt($sdt) {
        $this->sdt = $sdt;
    }

    public function get_sdt() {
        return $this->sdt;
    }

    public function set_gioitinh($gioitinh) {
        $this->gioitinh = $gioitinh;
    }

    public function get_gioitinh() {
        return $this->gioitinh;
    }

}

?>
