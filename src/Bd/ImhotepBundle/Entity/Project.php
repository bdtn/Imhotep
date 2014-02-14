<?php
     namespace Bd\ImhotepBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

        /**
         * Project
         *
         * @ORM\Table()
         * @ORM\Entity(repositoryClass="MyApp\FilmothequeBundle\Entity\ProjectRepository")
         */
        class Project
        {
            /**
             * @var integer
             *
             * @ORM\Column(name="id", type="integer")
             * @ORM\Id
             * @ORM\GeneratedValue(strategy="AUTO")
             */
            private $id;

            /**
             * @var string
             *
             * @ORM\Column(name="project_name", type="string", length=255)
             */
            private $projectName;

            /**
             * @var string
             *
             * @ORM\Column(name="project_description", type="text")
             */
            private $projectDescription;
            
            /**
             * @var integer
             *
             * @ORM\Column(name="project_type", type="integer")
             */
            private $projectType;
            
               /**
           * @ORM\ManyToOne(targetEntity="Bd\ImhotepBundle\Entity\Company")
           * @ORM\JoinColumn(nullable=false)
           */
              private $company;
                /**
               * @ORM\ManyToOne(targetEntity="Bd\ImhotepBundle\Entity\Departement")
               * @ORM\JoinColumn(nullable=false)
               */
              private $departement;
                /**
               * @ORM\ManyToOne(targetEntity="Bd\ImhotepBundle\Entity\Groupe")
               * @ORM\JoinColumn(nullable=true)
               */
              private $groupe;
              
                /**
               * @ORM\ManyToOne(targetEntity="Bd\ImhotepBundle\Entity\Client")
               * @ORM\JoinColumn(nullable=true)
               */
              private $client; 
            
            /**
           * @ORM\ManyToOne(targetEntity="Bd\UserBundle\Entity\User")
           * @ORM\JoinColumn(nullable=true)
           */
          private $user;

          /**
           * @ORM\ManyToOne(targetEntity="Bd\UserBundle\Entity\User")
           * @ORM\JoinColumn(nullable=true)
           */
          private $userClient;
          
           /**
           * @ORM\ManyToOne(targetEntity="Bd\UserBundle\Entity\User")
           * @ORM\JoinColumn(nullable=true)
           */
          private $responsableprojet;
          
            /**
             * @var \DateTime
             *
             * @ORM\Column(name="created_at", type="datetime")
             */
            private $createdAt;

            /**
             * @var \DateTime
             *
             * @ORM\Column(name="updated_at", type="datetime")
             */
            private $updatedAt;


            /**
             * Get id
             *
             * @return integer 
             */
            public function getId()
            {
                return $this->id;
            }

            /**
             * Set projectName
             *
             * @param string $projectName
             * @return Project
             */
            public function setProjectName($projectName)
            {
                $this->projectName = $projectName;

                return $this;
            }

            /**
             * Get projectName
             *
             * @return string 
             */
            public function getProjectName()
            {
                return $this->projectName;
            }

            /**
             * Set projectDescription
             *
             * @param string $projectDescription
             * @return Project
             */
            public function setProjectDescription($projectDescription)
            {
                $this->projectDescription = $projectDescription;

                return $this;
            }

            /**
             * Get projectDescription
             *
             * @return string 
             */
            public function getProjectDescription()
            {
                return $this->projectDescription;
            }

            /**
             * Set createdAt
             *
             * @param \DateTime $createdAt
             * @return Project
             */
            public function setCreatedAt($createdAt)
            {
                $this->createdAt = $createdAt;

                return $this;
            }

            /**
             * Get createdAt
             *
             * @return \DateTime 
             */
            public function getCreatedAt()
            {
                return $this->createdAt;
            }

            /**
             * Set updatedAt
             *
             * @param \DateTime $updatedAt
             * @return Project
             */
            public function setUpdatedAt($updatedAt)
            {
                $this->updatedAt = $updatedAt;

                return $this;
            }

            /**
             * Get updatedAt
             *
             * @return \DateTime 
             */
            public function getUpdatedAt()
            {
                return $this->updatedAt;
            }

            /**
             * Set projectType
             *
             * @param integer $projectType
             * @return Project
             */
            public function setProjectType($projectType)
            {
                $this->projectType = $projectType;

                return $this;
            }

            /**
             * Get projectType
             *
             * @return integer 
             */
            public function getProjectType()
            {
                return $this->projectType;
            }

            /**
             * Set user
             *
             * @param \Bd\UserBundle\Entity\User $user
             * @return Project
             */
            public function setUser(\Bd\UserBundle\Entity\User $user)
            {
                $this->user = $user;

                return $this;
            }

            /**
             * Get user
             *
             * @return \Bd\UserBundle\Entity\User 
             */
            public function getUser()
            {
                return $this->user;
            }
        
        /**
         * Set company
         *
         * @param \Bd\ImhotepBundle\Entity\Company $company
         * @return Project
         */
        public function setCompany(\Bd\ImhotepBundle\Entity\Company $company)
        {
            $this->company = $company;

            return $this;
        }

        /**
         * Get company
         *
         * @return \Bd\ImhotepBundle\Entity\Company 
         */
        public function getCompany()
        {
            return $this->company;
        }

        /**
         * Set departement
         *
         * @param \Bd\ImhotepBundle\Entity\Departement $departement
         * @return Project
         */
        public function setDepartement(\Bd\ImhotepBundle\Entity\Departement $departement)
        {
            $this->departement = $departement;

            return $this;
        }

        /**
         * Get departement
         *
         * @return \Bd\ImhotepBundle\Entity\Departement 
         */
        public function getDepartement()
        {
            return $this->departement;
        }

        /**
         * Set groupe
         *
         * @param \Bd\ImhotepBundle\Entity\Groupe $groupe
         * @return Project
         */
        public function setGroupe(\Bd\ImhotepBundle\Entity\Groupe $groupe = null)
        {
            $this->groupe = $groupe;

            return $this;
        }

        /**
         * Get groupe
         *
         * @return \Bd\ImhotepBundle\Entity\Groupe 
         */
        public function getGroupe()
        {
            return $this->groupe;
        }

        /**
         * Set client
         *
         * @param \Bd\ImhotepBundle\Entity\Client $client
         * @return Project
         */
        public function setClient(\Bd\ImhotepBundle\Entity\Client $client = null)
        {
            $this->client = $client;

            return $this;
        }

        /**
         * Get client
         *
         * @return \Bd\ImhotepBundle\Entity\Client 
         */
        public function getClient()
        {
            return $this->client;
        }
    
    /**
     * Set userClient
     *
     * @param \Bd\UserBundle\Entity\User $userClient
     * @return Project
     */
    public function setUserClient(\Bd\UserBundle\Entity\User $userClient = null)
    {
        $this->userClient = $userClient;

        return $this;
    }

    /**
     * Get userClient
     *
     * @return \Bd\UserBundle\Entity\User 
     */
    public function getUserClient()
    {
        return $this->userClient;
    }

    /**
     * Set responsableprojet
     *
     * @param \Bd\UserBundle\Entity\User $responsableprojet
     * @return Project
     */
    public function setResponsableprojet(\Bd\UserBundle\Entity\User $responsableprojet = null)
    {
        $this->responsableprojet = $responsableprojet;

        return $this;
    }

    /**
     * Get responsableprojet
     *
     * @return \Bd\UserBundle\Entity\User 
     */
    public function getResponsableprojet()
    {
        return $this->responsableprojet;
    }
}
