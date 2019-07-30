<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use App\Entity\User;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use App\Form\RegistrationForm1;

    class PageController extends AbstractController
    {
        /**
         * @Route("/")
         */
        public function registration()
        {
            return new Response('<html><body><h1>Registration</h1></body></html>');
        }

        /**
         * @Route("/step1")
         */
        public function firstStep(Request $request)
        {
            $user = new User();
            $form1 = $this->createForm(RegistrationForm1::class, $user);
            $form1->handleRequest($request);
            return $this->render('templates/base.html.twig', array( 'form' => $form->createView() ));
        }
    }
