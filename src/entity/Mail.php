<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mail
 *
 * @ORM\Table(name="mails")
 * @ORM\Entity(repositoryClass="App\Entity\MailRepo")
 */
class Mail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="users_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255, precision=0, scale=0, nullable=false, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="confirmed", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $confirmed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmUUID", type="string", precision=0, scale=0, nullable=true, unique=false)
     */
    private $confirmUUID;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", precision=0, scale=0, nullable=true, unique=false)
     */
    private $language;


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
     * Set mail
     *
     * @param string $mail
     *
     * @return Mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Mail
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set confirmed
     *
     * @param \DateTime $confirmed
     *
     * @return Mail
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get confirmed
     *
     * @return \DateTime
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Mail
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set confirmUUID
     *
     * @param string $confirmUUID
     *
     * @return Mail
     */
    public function setConfirmUUID($confirmUUID)
    {
        $this->confirmUUID = $confirmUUID;

        return $this;
    }

    /**
     * Get confirmUUID
     *
     * @return string
     */
    public function getConfirmUUID()
    {
        return $this->confirmUUID;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Mail
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}