<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use App\Entity\Client;
    use Symfony\Component\HttpFoundation\Request;
    use App\Form\RegistrationForm;

    class PageController extends AbstractController
    {
        /**
         * @Route("/", name="main")
         */
        public function index()
        {
            return $this->render('base.html.twig');
        }

        /**
         * @Route("/registration", name="registration")
         * @throws \Exception
         */
        public function registration(Request $request)
        {
            $client = new Client();
            $form = $this->createForm(RegistrationForm::class, $client);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $client->setFeedbackDataId(md5(uniqid(rand(), 1)));
                $feedbackDataId = $client->getFeedbackDataId();
                $em = $this->getDoctrine()->getManager();
                    $em->persist($client);
                    try {
                        $em->flush();
                        $response = new Response();
                        $response->setStatusCode(Response::HTTP_OK);
                    }
                    finally {
                        if (!isset($response)) {
                            return $this->render('error.html.twig');
                        }
                    }
                return $this->render('success.html.twig', [
                    'feedbackDataId' => $feedbackDataId
                 ]);
            }

            return $this->render('registration.html.twig', [
                'form' => $form->createView()
            ]);
        }
    }
