<?php
namespace libs\system;
    class Model
    {
        protected $entityManager;
        public function __construct()
        {
            // je pense que bootstrap.php n'etant pas dans le meme dossier ,ce require_once va generer une erreur
            // a moins que config/autoload.php ait deja geré cela
            require_once "bootstrap2.php";
            $this->entityManager = $entityManager;
        }
    }
?>