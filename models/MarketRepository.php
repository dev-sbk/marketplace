<?php
/**
 * Created by PhpStorm.
 * User: SABER KHALIFA
 * Date: 15/10/2016
 * Time: 19:52
 */
abstract class MarketRepository
{

    protected $_host = "localhost";
    protected $_dbname = "market";
    protected $_username = "root";
    protected $_password = "sj8Ca8lQ20nA";
    private $con = null;
    private $metier = null;
    /**
     * CONSTRUCTEUR OF MarketRepository
     */
    function __construct()
    {
        try {
            $this->con = new PDO("mysql:host=" . $this->_host . ";dbname=" . $this->_dbname, $this->_username, $this->_password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            require_once "./metier/MarketMetier.php";
            if ($this->metier == null) $this->metier = new MarketMetier();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }
    /**
     * THIS METHOD TO GIVE CONNEXION OF DATABASE
     * @return null|PDO
     */
    public function getConnexion()
    {
        if ($this->con == null) {
            MarketRepository::__construct();
        }
        return $this->con;
    }

    /**
     * THIS METHOD TO INSERT NEW ROW IN THE DATABASE
     * @param $object
     */
    public function save($object)
    {
        if ($object != null) {
            $data = (array)$this->metier->dismount($object);
            $req = "INSERT INTO " . $data["name"] . " (";
            $size = sizeof($data);
            $count = 0;
            foreach ($data as $key => $value) {
                $count++;
                if ($key != "name" && $size != $count) $req .= $key . ",";
                if ($size == $count) $req .= $key . ") VALUES (";
            }
            $count = 0;
            foreach ($data as $key => $value) {
                $count++;
                if ($key != "name" && $size != $count) $req .= ":" . $key . ",";
                if ($size == $count) {
                    $req .= ":" . $key . ")";
                }

            }
            $stmt = $this->con->prepare($req);
            $count = 0;
            $values = array();
            foreach ($data as $key => $value) {
                if ($key != "name" && $size != $count) {
                    $values[":" . $key] = $value;
                }

            }
            $stmt->execute($values);
        }
    }
    /**
     * THIS METHOD TO UPDATE  ROW IN THE DATABASE
     * @param $object
     */
    public function update($object)
    {
        if ($object != null) {
            $id = null;
            $idValue = null;
            $data = (array)$this->metier->dismount($object);
            $req = "UPDATE  " . $data["name"] . " SET ";
            $size = sizeof($data);
            $count = 0;
            var_dump($data);
            foreach ($data as $key => $value) {
                $count++;
                if ($count == 2) {
                    $id = $key;
                    $idValue = $value;
                }
                if ($key != "name" && $size != $count) $req .= $key . " = :" . $key . ",";
                if ($size == $count) {
                    $req .= $key . " = :" . $key . " WHERE " . $id . " = " . $idValue;
                }
            }
            $stmt = $this->con->prepare($req);
            $count = 0;
            $values = array();
            foreach ($data as $key => $value) {
                if ($key != "name" && $size != $count) {
                    $values[":" . $key] = $value;
                }

            }
            $stmt->execute($values);
        }
    }
    /**
     * THIS METHOD TO UPDATE  ROW IN THE DATABASE
     * @param $object
     */
    public function delete($object)
    {
        if ($object != null) {
            $id = null;
            $idValue = null;
            $data = (array)$this->metier->dismount($object);
            $req = "DELETE FROM   " . $data["name"] . " WHERE ";
            $size = sizeof($data);
            $count = 0;
            var_dump($data);
            foreach ($data as $key => $value) {
                $count++;
                if ($count == 2) {
                    $id = $key;
                    $idValue = $value;
                }
                if ($size == $count) {
                    $req .= $id . " = " . $idValue;
                }
            }
            $stmt = $this->con->prepare($req);
            var_dump($req);
            $stmt->execute();
        }
    }
    /**
     * THE ROLE OF THIS METHOD IS TO GET ALL ROW FROM TABLE
     * @param $array
     * @return array
     */
    public function findAll($array)
    {
        $sql = "SELECT * FROM " . $array["name"];
        $rs = $this->con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }

    /**
     * THE ROLE OF THIS METHOD IS TO GET ONE ROW FROM TABLE
     * @param $array
     * @return array
     */
    public function findOne($array)
    {
        $sql = "SELECT * FROM " . $array["name"] . " WHERE " . $array["id"] . " = " . $array["value"];
        $rs = $this->con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }
    /**
     * THE ROLE OF THIS METHOD IS TO GET ONE ROW FROM TABLE
     * @param $array
     * @return array
     */
    public function findPage($array)
    {
        $sql = "SELECT * FROM " . $array["name"]." ORDER BY  ".$array["id"]." DESC LIMIT ".$array["size"];
        $rs = $this->con->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rs;
    }

    /**
     * DESTRUCT OF MarketRepository
     */
    function __destruct()
    {
        if ($this->con != null) $this->con = null;
    }
}