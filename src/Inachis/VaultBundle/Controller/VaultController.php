<?php

namespace Inachis\Component\VaultBundle\Controller;

use Inachis\Component\CoreBundle\Application;
use Inachis\Component\CoreBundle\Controller\AbstractController;

class VaultController extends AbstractController
{
    /**
     * @Route('/vault')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getVaultHomepage($request, $response, $service, $app)
    {
        $response->body('moo');
    }
}
