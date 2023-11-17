<?php

namespace Fixpunkt\FpContactlist\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class ContactRepository extends Repository {
    
    public function findByEmail($inputData) {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalOr(
                $query->equals('name', $inputData),
                $query->equals('email', $inputData),
                $query->equals('phone', $inputData)
            )
        );
        
        return $query->execute();
    }
}