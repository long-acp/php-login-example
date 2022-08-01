<?php

class User
{
    private int $id;
    private String $name;
    private String $email;
    private String $city;
    private String $password;

    /**
     * @param int $id
     * @param String $name
     * @param String $email
     * @param String $city
     * @param String $password
     */
    public function __construct(int $id, string $name, string $email, string $city, string $password)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->email    = $email;
        $this->city     = $city;
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param String $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return String
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param String $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return String
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param String $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}