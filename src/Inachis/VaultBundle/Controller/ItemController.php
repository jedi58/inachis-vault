<?php

namespace Inachis\Component\VaultBundle\Controller;

use Inachis\Component\CoreBundle\Application;
use Inachis\Component\CoreBundle\Controller\AbstractController;

class ItemController extends AbstractController
{
    /**
     * @Route('/vault/browse/year')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getYearList($request, $response, $service, $app)
    {

    }

    /**
     * @Route('/vault/browse/range/[i:rangeId]')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getItemListByRange($request, $response, $service, $app)
    {

    }

    /**
     * @Route('/vault/browse/range/[i:rangeId]/item/[i:itemId]')
     * @Route('/vault/browse/type/[i:typeId]/item/[i:itemId]')
     * @Route('/vault/browse/year/[i:year]/item/[i:itemId]')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getItem($request, $response, $service, $app)
    {

    }

    /**
     * @Route('/vault/browse/type/[i:typeId]')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getItemListByType($request, $response, $service, $app)
    {

    }

    /**
     * @Route('/vault/browse/year/[i:year]')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getItemListByYear($request, $response, $service, $app)
    {

    }

    /**
     * @Route('/vault/browse/year/new')
     * @Method({"GET"})
     * @param \Klein\Request $request
     * @param \Klein\Response $response
     * @param \Klein\ServiceProvider $service
     * @param \Klein\App $app
     */
    public static function getYear($request, $response, $service, $app)
    {

    }
}
