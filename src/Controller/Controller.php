<?php

namespace App\Controller;

abstract class Controller
{
    /**
     * @var ContainerInterface
     */
    protected $ci;

    /**
     * Constructor.
     *
     * @param ContainerInterface $ci Service container.
     */
    public function __construct(ContainerInterface $ci)
    {
        $this->ci = $ci;
    }

    /**
     * Convenience method for rendering a page.
     *
     * @param Response $response Response object.
     * @param string   $template Template name.
     * @param array    $data     Data.
     */
    protected function renderPage($response, $template, $data = [])
    {
        return $this->ci->templating->renderPage(
            $response,
            $template,
            $data
        );
    }
}
