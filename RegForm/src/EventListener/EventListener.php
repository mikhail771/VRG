<?php

    namespace App\EventListener;

    use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    use Monolog\Handler\FirePHPHandler;

    class EventListener
    {
        public function onKernelException(GetResponseForExceptionEvent $event)
        {
            $exception = $event->getException();
            $message = sprintf(
                'My Error says: %s with code: %s',
                $exception->getMessage(),
                $exception->getCode()
            );

            $response = new Response();
            $response->setContent($message);

            if ($exception instanceof HttpExceptionInterface) {
                $response->setStatusCode($exception->getStatusCode());
                $response->headers->replace($exception->getHeaders());
            } else {
                $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $log = new Logger('log');
            $log->pushHandler(new StreamHandler('../var/log/log.log', Logger::DEBUG));
            $log->pushHandler(new FirePHPHandler());
            $log->error($message);
        }
    }
