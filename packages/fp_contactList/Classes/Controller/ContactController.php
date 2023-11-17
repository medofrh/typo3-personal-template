<?php
namespace Fixpunkt\FpContactlist\Controller;

use Fixpunkt\FpContactlist\Domain\Repository\ContactRepository;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Fixpunkt\FpContactlist\Domain\Model\Contact;

class ContactController extends ActionController {


    protected Contact $Contact;

    /**
     * @var ContactRepository
     */
    public function __construct(
        readonly protected ContactRepository $contactRepository
    ) {}

    public function listAction() : ResponseInterface {
        $contacts = $this->contactRepository->findAll();
        $this->view->assign('contacts', $contacts);
        return $this->htmlResponse();
    }

    public function searchAction() : ResponseInterface {
        $input = $this->request->getArgument('list');
        if (!empty($input) && $input !== null) {
        $email = $this->contactRepository->findByEmail($input);
        $this->view->assign('email', $email);
        return $this->htmlResponse();
        }else{
            return $this->listAction();
        }
    }
}