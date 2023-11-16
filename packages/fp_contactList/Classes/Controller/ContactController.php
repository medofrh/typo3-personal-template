<?php
namespace Fixpunkt\FpContactlist\Controller;

use Fixpunkt\FpContactlist\Domain\Repository\ContactRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ContactController extends ActionController {
    public function __construct(
        readonly protected ContactRepository $contactRepository
    ) {}

    public function listAction() : ResponseInterface {
        $contacts = $this->contactRepository->findAll();
        $this->view->assign('contacts', $contacts);
        return $this -> htmlResponse();
    }
}