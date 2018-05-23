<?php
class koneksi {
   private $server = "localhost";
   private $username = "id4925391_prog_web";
   private $password = "samsulamin13";
    private $db = "id4925391_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,$this->password,$this->db);
    }
}

?>