<?php

namespace Egf\Ancient;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;

/**
 * Service class to extend.
 * @author attila kovacs
 * @since 2015.10.09.
 */
abstract class Service {

    /**
     * @var ContainerInterface
     */
    protected $oContainer;

    /**
     * Construct of Service.
     * @param ContainerInterface $oContainer
     */
    public function __construct(ContainerInterface $oContainer) {
        $this->oContainer = $oContainer;
    }

    /**
     * Get service.
     * @param $sServiceName
     * @return Service class.
     */
    protected function get($sServiceName) {
        return $this->oContainer->get($sServiceName);
    }

    /**
     * Get DoctrineManager.
     * @return EntityManager
     */
    protected function getDm() {
        return $this->get("doctrine")->getManager();
    }

}