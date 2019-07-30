<?php

    namespace App\Entity;
    class User
    {
        protected $id;
        protected $firstName;
        protected $lastName;
        protected $telNumber;
        protected $city;
        protected $street;
        protected $home;
        protected $comment;
        protected $feedbackDataId;

        /**
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param int $id
         */
        public function setId($id): void
        {
            $this->id = $id;
        }

        /**
         * @return string
         */
        public function getFirstName()
        {
            return $this->firstName;
        }

        /**
         * @param string $firstName
         */
        public function setFirstName($firstName): void
        {
            $this->firstName = $firstName;
        }

        /**
         * @return string
         */
        public function getLastName()
        {
            return $this->lastName;
        }

        /**
         * @param string $lastName
         */
        public function setLastName($lastName): void
        {
            $this->lastName = $lastName;
        }

        /**
         * @return mixed
         */
        public function getTelNumber()
        {
            return $this->telNumber;
        }

        /**
         * @param mixed $telNumber
         */
        public function setTelNumber($telNumber): void
        {
            $this->telNumber = $telNumber;
        }

        /**
         * @return string
         */
        public function getCity()
        {
            return $this->city;
        }

        /**
         * @param string $city
         */
        public function setCity($city): void
        {
            $this->city = $city;
        }

        /**
         * @return string
         */
        public function getStreet()
        {
            return $this->street;
        }

        /**
         * @param string $street
         */
        public function setStreet($street): void
        {
            $this->street = $street;
        }

        /**
         * @return int
         */
        public function getHome()
        {
            return $this->home;
        }

        /**
         * @param int $home
         */
        public function setHome($home): void
        {
            $this->home = $home;
        }

        /**
         * @return string
         */
        public function getComment()
        {
            return $this->comment;
        }

        /**
         * @param string $comment
         */
        public function setComment($comment): void
        {
            $this->comment = $comment;
        }

        /**
         * @return mixed
         */
        public function getFeedbackDataId()
        {
            return $this->feedbackDataId;
        }

        /**
         * @param mixed $feedbackDataId
         */
        public function setFeedbackDataId($feedbackDataId): void
        {
            $this->feedbackDataId = $feedbackDataId;
        }
    }
