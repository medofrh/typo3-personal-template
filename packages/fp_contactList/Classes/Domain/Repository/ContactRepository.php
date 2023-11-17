<?php

namespace Fixpunkt\FpContactlist\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class ContactRepository extends Repository {
    
    public function findByEmail($email) {
        $query = $this->createQuery();
        $query->matching(
            $query->equals('email', $email)
        );
        
        return $query->execute();
    }
}