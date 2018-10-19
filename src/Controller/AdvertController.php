<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PuppyRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Puppy;

class AdvertController extends AbstractController
{
    /**
     * @Route("/", name="advert.index")
     */
    public function index()
    {
        return $this->render('advert/index.html.twig', [
            'controller_name' => 'AdvertController',
        ]);
    }

    /**
     * @Route("/", name="advert.search")
     */
    public function search()
    {
        return $this->render('advert/index.html.twig', [
            'controller_name' => 'AdvertController',
        ]);
    }

    /**
     * @Route("/", name="advert.show")
     */
    public function showc()
    {
        return $this->render('advert/index.html.twig', [
            'controller_name' => 'AdvertController',
        ]);
    }

    /**
     * @Route("/", name="advert.listing")
     */
    public function listing()
    {
        return $this->render('advert/index.html.twig', [
            'controller_name' => 'AdvertController',
        ]);
    }

    /**
     * @Route("/", name="puppy_index", methods="GET")
     */
    public function indexapp(PuppyRepository $puppyRepository): Response
    {
        return $this->render('puppy/index.html.twig', ['puppies' => $puppyRepository->findAll()]);
    }

    /**
     * @Route("/new", name="puppy_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $puppy = new Puppy();
        $form = $this->createForm(PuppyType::class, $puppy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($puppy);
            $em->flush();

            return $this->redirectToRoute('puppy_index');
        }

        return $this->render('puppy/new.html.twig', [
            'puppy' => $puppy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="puppy_show", methods="GET")
     */
    public function show(Puppy $puppy): Response
    {
        return $this->render('puppy/show.html.twig', ['puppy' => $puppy]);
    }

    /**
     * @Route("/{id}/edit", name="puppy_edit", methods="GET|POST")
     */
    public function edit(Request $request, Puppy $puppy): Response
    {
        $form = $this->createForm(PuppyType::class, $puppy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('puppy_edit', ['id' => $puppy->getId()]);
        }

        return $this->render('puppy/edit.html.twig', [
            'puppy' => $puppy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="puppy_delete", methods="DELETE")
     */
    public function delete(Request $request, Puppy $puppy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$puppy->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($puppy);
            $em->flush();
        }

        return $this->redirectToRoute('puppy_index');
    }

}
