<?php

namespace Inachis\Component\VaultBundle\Controller;

use Inachis\Component\CoreBundle\Application;
use Inachis\Component\CoreBundle\Controller\AbstractController;

class RangeController extends AbstractController
{
    /**
     * @Route('/vault/browse/range')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getRangeList($request, $response, $service, $app)
    {

    }

    /**
     * @Route('/vault/browse/range/[i:rangeId]/edit')
     * @Route('/vault/browse/range/new')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getRange($request, $response, $service, $app)
    {

    }
}
