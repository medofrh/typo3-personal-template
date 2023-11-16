<?php
namespace Fixpunkt\FpContactlist\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Contact extends AbstractEntity {
    /** @var string */
    protected string $name = "";
    /** @var string */
    protected string $phone = "";
    /** @var string */
    protected string $email = "";

    public function getName(): string {
        return $this->name;
    }
    public function getPhone(): string {
        return $this->phone;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

}