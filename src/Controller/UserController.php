<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Document\User;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ODM\MongoDB\DocumentRepository;

class UserController extends Controller
{
    /**
     * @Route(
     *     "/users",
     *     name="get_users",
     *     methods={"GET"}
     * )
     */
    public function getAllUsers()
    {
        $users = $this->getRepository()->findAll();

        return $this->render('User/users.html.twig', ['users' => $users]);
    }

    /**
     * @Route(
     *     "/users/{id}",
     *     name="get_user",
     *     methods={"GET"},
     * )
     */
    public function getOneUser($id)
    {
        $user = $this->getRepository()->find($id);

        return $this->render('User/user.html.twig', ['user' => $user]);
    }

    /**
     * @Route(
     *     "/users",
     *     name="add_user",
     *     methods={"POST"},
     * )
     */
    public function addOneUser()
    {
        $user = new User;
        $user->setFirstname("Jon");
        $user->setLastname("Do");
        $user->setEmail("jdoe@gmail.com");
        $user->setJob("Mentalist");

        $manager = $this->getManager();
        $manager->persist($user);

        $manager->flush();

        return new Response("ADD one User");
    }

    /**
     *
     * @return ObjectManager
     */
    protected function getManager()
    {
        return $this->get('doctrine_mongodb.odm.document_manager');
    }

    /**
     *
     * @return DocumentRepository
     */
    protected function getRepository()
    {
        return $this->get('doctrine_mongodb.odm.document_manager')->getRepository(User::class);
    }
}
