<?php
namespace App\src\repository;

use App\src\config\Db;
use App\src\model\Client;

class ClientRepository
{
    private $db;
    public function __construct()
    {
        if (!isset($this->post)) {
            $this->db = new Db;
        }
    }
    public function getClient()
    {
        $database = $this->db->VerifConnect();
        $result = $database->query('SELECT * FROM `client`');
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

}
?>