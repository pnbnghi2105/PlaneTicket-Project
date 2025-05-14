<?php
require_once "connect.php";
class ctrl_frm extends connect
{
    function get_dschuyenbay()
    {
        $sql = "select * from tuyenbay";
        $kq = $this->link->query($sql);
        return $kq;
    }
    function get_tl()
    {
        $sql = "select * from loaihinhbay";
        $kq = $this->link->query($sql);
        return $kq;
    }
    function get_noidia()
    {
        $sql = "select * from tuyenbay where Loai='Nội địa'";
        $kq = $this->link->query($sql);
        return $kq;
    }
    function get_quocte()
    {
        $sql = "select * from tuyenbay where Loai='Quốc tế'";
        $kq = $this->link->query($sql);
        return $kq;
    }
    function get_chitietchuyenbay()
    {
        $sql = "select * from tuyenbay ";
        $kq = $this->link->query($sql);
        return $kq;
    }
    function get_kqtk($key)
    {
        $sql = "select * from tuyenbay where MaCHKDen LIKE '%$key%' ";
        $kq = $this->link->query($sql);
        return $kq;
    }
    
}
?>