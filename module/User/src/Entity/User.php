<?php
namespace User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a registered user.
 * @ORM\Entity(repositoryClass="\User\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User
{
    // User status constants.
    const STATUS_ACTIVE     = 1; // Active user.
    const STATUS_RETIRED    = 2; // Retired user.

    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(name="email")
     */
    private $email;

    /**
     * @ORM\Column(name="full_name")
     */
    private $fullName;

    /**
     * @ORM\Column(name="password")
     */
    private $password;

    /**
     * @ORM\Column(name="status")
     */
    private $status;

    /**
     * @ORM\Column(name="date_created")
     */
    private $dateCreated;

    /**
     * @ORM\Column(name="pwd_reset_token")
     */
    private $passwordResetToken;

    /**
     * @ORM\Column(name="pwd_reset_token_creation_date")
     */
    private $passwordResetTokenCreationDate;


    /**
     * Returns user ID
     * @return integer
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns email
     * @return string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email
     * @param string $email
     * @return self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Returns fullname
     * @return string
     */ 
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets full name
     * @param string $fullname
     * @return self
     */ 
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Returns password
     * @return string
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets password
     * @param string $password
     * @return self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Returns status.
     * @return int
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns possible status as array
     * @return array
     */
    public static function getStatusList()
    {
        return [
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_RETIRED => 'Retired'
        ];
    }

    /**
     * Returns user status as string
     * @return string
     */
    public function getStatusAsString()
    {
        $list = self::getStatusList();
        if (isset($list[$this->status])) {
            return $list[$this->status];
        }

        return 'Unknown';
    }

    /**
     * Set the value of status
     * @param int $status
     * @return self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Returns date created.
     * @return string
     */ 
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Sets date created
     * @param string $dateCreated
     * @return self
     */ 
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Returns password reset token.
     * @return string
     */ 
    public function getPasswordResetToken()
    {
        return $this->passwordResetToken;
    }

    /**
     * Sets password reset token
     * @param string $passwordResetToken
     * @return self
     */ 
    public function setPasswordResetToken($passwordResetToken)
    {
        $this->passwordResetToken = $passwordResetToken;
        return $this;
    }

    /**
     * Returns password reset token creation date
     * @return string
     */ 
    public function getPasswordResetTokenCreationDate()
    {
        return $this->passwordResetTokenCreationDate;
    }

    /**
     * Sets password reset token creation date.
     * @param string $passwordResetTokenCreationDate
     * @return self
     */ 
    public function setPasswordResetTokenCreationDate($passwordResetTokenCreationDate)
    {
        $this->passwordResetTokenCreationDate = $passwordResetTokenCreationDate;
        return $this;
    }
}