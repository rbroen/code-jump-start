<?php

declare(strict_types=1);

namespace App\Entity;

use Keet\Encrypt\Annotation\Hashed;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * User entity
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected int $id;

    /**
     * Username is optional, if null the email will be used
     *
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
    protected string $username;

    /**
     * @ORM\Column(type="string", unique=true,  length=255)
     *
     */
    protected string $email;

    /**
     * @ORM\Column(name="password", type="text", nullable=false)
     * @Hashed
     */
    protected string $password;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->getId(),
        ];
    }
}
