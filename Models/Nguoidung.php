<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once($_SERVER['DOCUMENT_ROOT'] . '/LVTN/Config/connect.php');

class Nguoidung extends database {

    private $username = "";
    private $password = "";
    private $nhom_quyen = "";

    public function set_username($username) {
        $this->username = $username;
    }

    public function get_username() {
        return $this->username;
    }

    public function set_password($password) {
        $this->password = $password;
    }

    public function get_password() {
        return $this->password;
    }
    public function set_quyen($nhom_quyen) {
        $this->password = $password;
    }

    public function get_quyen() {
        return $this->nhom_quyen;
    }

}

?>
