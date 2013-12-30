<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once($_SERVER['DOCUMENT_ROOT'] . '/LVTN/Config/connect.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/LVTN/Models/Donvi.php');

class Nganh extends Donvi {

    private $ma_nganh = "";
    private $ten_nganh = "";

    public function set_ma_nganh($ma_nganh) {
        $this->cmnd = $ma_nganh;
    }

    public function get_ma_nganh() {
        return $this->ma_nganh;
    }

    public function set_ten_nganh($ten_nganh) {
        $this->cmnd = $ten_nganh;
    }

    public function get_ten_nganh() {
        return $this->ten_nganh;
    }

}

?>
