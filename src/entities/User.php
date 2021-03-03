<?php
   
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * @ORM\Entity 
     * ORM\Table(name="user")
     */
    class User
    {
       /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
        private $id;
        /**
        *@ORM\Column(type="integer")
        */
        private $nom;
        /**
        *@ORM\Column(type="string")
        */
        private $prenom;
        /**
        *@ORM\Column(type="string")
        */
        private $email;
        /**
        * @ORM\Column(type="string")
        */
        private $password;
        /**
         * One user has many lieux. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
         */
        private $lieux;
        /**
         * Many Users have Many Roles.
         * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
         * @ORM\JoinTable(name="users_roles")
         */
        private $roles;

        public function __construct()
        {
            $this->lieux = new ArrayCollection();
            $this->roles = new ArrayCollection();
        }

        public function getId()
        {
            return $this -> id;
        }
        public function setId($id)
        {
            $this->id = $id ;
        }
        public function getNom()
        {
            return $this -> nom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom ;
        }
        public function getPrenom()
        {
            return $this -> date;
        }
        public function setPrenom($date)
        {
            $this->date = $date ;
        }
        public function getEmail()
        {
            return $this -> email;
        }
        public function setEmail($email)
        {
            $this->email = $email ;
        }
        
        public function getPassword()
        {
            return $this -> password;
        }
        public function setPassword($password)
        {
            $this->password = $password ;
        }

        public function getLieux()
        {
            return $this -> lieux;
        }
        public function setLieux($lieu)
        {
            $this->lieu = $lieu ;
        }
        public function getRoles()
        {
            return $this -> roles;
        }
        public function setRoles($roles)
        {
            $this->roles = $roles ;
        }







    }
 ?>