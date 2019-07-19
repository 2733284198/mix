<?php

namespace Http\Middleware;

use Mix\Http\Server\Middleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class GlobalMiddleware
 * @package Http\Middleware
 * @author liu,jian <coder.keda@gmail.com>
 */
class GlobalMiddleware implements MiddlewareInterface
{

    /**
     * @var ServerRequestInterface
     */
    public $request;

    /**
     * @var ResponseInterface
     */
    public $response;

    /**
     * AfterMiddleware constructor.
     *
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     */
    public function __construct(ServerRequestInterface $request, ResponseInterface $response)
    {
        $this->request  = $request;
        $this->response = $response;
    }

    /**
     * Process an incoming server request.
     *
     * Processes an incoming server request in order to produce a response.
     * If unable to produce the response itself, it may delegate to the provided
     * request handler to do so.
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // TODO: Implement process() method.
        return $handler->handle($request);
    }

}