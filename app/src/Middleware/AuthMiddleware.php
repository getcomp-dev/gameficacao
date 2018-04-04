<?php

namespace App\Middleware;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class AuthMiddleware
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, callable $next)
    {

        if (!isset($_SESSION['id']) || ($user = $this->container->get('UsuarioDAO')->getById($_SESSION['id'])) == null) {
            return $response->withRedirect($this->container->get('router')->pathFor('login'));
        }

        $this->container->get('view')['loggedUser'] = $user;
        $newRequest = $request->withAttribute('user', $user);

        return $next($newRequest, $response);
    }
}
