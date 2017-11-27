<?php

namespace Inachis\Component\VaultBundle\Controller;

use Inachis\Component\CoreBundle\Application;
use Inachis\Component\CoreBundle\Controller\AbstractController;

class ItemTypeController extends AbstractController
{
    /**
     * @Route('/vault/browse/type')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getItemTypeList($request, $response, $service, $app)
    {

    }

    /**
     * @Route('/vault/browse/type/[i:typeId]/edit')
     * @Route('/vault/browse/type/new')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getItemType($request, $response, $service, $app)
    {

    }
}
