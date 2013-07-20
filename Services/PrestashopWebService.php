<?php
namespace KkuetNet\PrestashopWebServiceBundle\Services;


class PrestashopWebService{
    private $container  = null;
    private $em         = null;
    private $instance   = null;
    
    public function __construct($container){
        $this->container = $container;
        $this->em        = $container->get('doctrine')->getEntityManager();
    }
    
    public function getInstance(){
        if(is_null($this->instance)){
            $this->instance =  new \KkuetNet\PrestashopWebServiceBundle\Vendor\PrestaShopWebservice(
                $this->container->getParameter('kkuet_net_prestashop_web_service.website'),
                $this->container->getParameter('kkuet_net_prestashop_web_service.key'),
                $this->container->getParameter('kkuet_net_prestashop_web_service.debug')
            );
        }
        return $this->instance;
    }
}

?>
