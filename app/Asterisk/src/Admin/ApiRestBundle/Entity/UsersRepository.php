<?php

namespace Admin\ApiRestBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersRepository extends EntityRepository
{
    public function findUserById($id){
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u FROM ApiRestBundle:Users u WHERE u.id = :id");
        $query->setParameter('id',$id);
        return $query->getArrayResult();
    }

    public function findAllUser(){
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u FROM ApiRestBundle:Users u");
        return $query->getArrayResult();
    }
}
