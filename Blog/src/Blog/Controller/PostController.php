<?php

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Doctrine\ORM\EntityManager;

class PostController extends AbstractActionController {

    protected $entityManager;

    public function setEntityManager(EntityManager $em)
    {
        $this->entityManager = $em;
        return $this->entityManager;
    }

    public function getEntityManager()
    {
        if (null == $this->entityManager) {
            $this->setEntityManager($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        }
        return $this->entityManager;
    }

    public function indexAction()
    {
        $repository = $this->getEntityManager()->getRepository('Blog\Entity\Post');
        $posts = $repository->findAll();

        return array(
            "posts" => $posts,
        );
    }

    public function addAction()
    {
        return array();
    }

    public function deleteAction()
    {
        return array();
    }

    public function editAction()
    {
        return array();
    }
}
