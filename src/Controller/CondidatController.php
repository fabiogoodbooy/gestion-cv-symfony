<?php

namespace App\Controller;


use App\Form\FormationType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Formation;
use App\Entity\Experience;
use App\Entity\Langue;
use App\Form\RegistrationType;
use Doctrine\Common\Persistence\ObjectManager;
class CondidatController extends AbstractController
{
    /**
     * @Route("/condidat/{id}", name="condidat")
     */
    public function index($id)
    {


        $repository =$this->getDoctrine()->getManager()->getRepository(user::class);
        $user=$repository->find($id);

        $em=$this->getDoctrine()->getManager();
        $listformation = $em->getRepository(formation::class)->findBy(array('user' => $user));
        $langue = $em->getRepository(langue::class)->findBy(array('user'=>$user));
        $experience=$em->getRepository(experience::class)->findBy(array('user' => $user));
        return $this->render('condidat/index.html.twig',array('listformation'=>$listformation,
            'langue'=>$langue,
            'experience'=>$experience
            ));
    }

    /**
     * @Route("/profile", name ="profile")
     */
    public function showProfile(){

        return $this->render('condidat/profile.html.twig');
    }

    /**
     * @Route("/profile/edit/{id}", name="editProfile")
     */
    public function editProfile(Request $request,User $user)
    {
        $form = $this->createForm(RegistrationType::class,$user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profile' );
        }
        return $this->render('condidat/profile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/supprimeformation/{id}/{id_user}", name ="supprimerFormation")
     */
    public function  supprimerinformation($id,$id_user){
        $repository =$this->getDoctrine()->getRepository(formation::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em ->remove($repository);
        $em->flush();
        return $this->redirectToRoute('condidat', ['id' => $id_user]);

    }
    /**
     * @Route("/allCv" , name="allCv")
     */
    public function  allCv(){
        $repository =$this->getDoctrine()->getManager()->getRepository(user::class);
        $condidat=$repository->findAll();
        return $this->render('admin/allCv.html.twig',array('condidat'=>$condidat));
    }

    /**
     * @Route("/supprimelangue/{id}/{id_user}", name ="supprimerlangue")
     */

    public function  supprimerlangue($id,$id_user){
        $repository =$this->getDoctrine()->getRepository(langue::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em ->remove($repository);
        $em->flush();
        return $this->redirectToRoute('condidat', ['id' => $id_user]);

    }

    /**
     * @Route("/supprimerexperionce/{id}/{id_user}", name ="supprimerexperionce")
     */

    public function  supprimerexperionce($id,$id_user){
        $repository =$this->getDoctrine()->getRepository(experience::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em ->remove($repository);
        $em->flush();
        return $this->redirectToRoute('condidat', ['id' => $id_user]);

    }
    /**
     * @Route("/cv/{id}", name="cv")
     */
    public function cv($id)
    {


        $repository =$this->getDoctrine()->getManager()->getRepository(user::class);
        $user=$repository->find($id);

        $em=$this->getDoctrine()->getManager();
        $listformation = $em->getRepository(formation::class)->findBy(array('user' => $user));
        $langue = $em->getRepository(langue::class)->findBy(array('user'=>$user));
        $experience=$em->getRepository(experience::class)->findBy(array('user' => $user));
        return $this->render('admin/showCv.html.twig',array('listformation'=>$listformation,
            'langue'=>$langue,
            'experience'=>$experience,
            'user'=>$user
        ));
    }
    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('home.html.twig');
    }



}
