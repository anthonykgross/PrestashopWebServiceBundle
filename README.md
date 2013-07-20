Getting Started With KkuetNetPrestashopWebServiceBundle
==================================

This bundle allow you to integrate easily Prestashop API into your symfony project.

## Prerequisites

This version of the bundle requires Symfony 2.1+.

## Installation

Installation is a quick (I promise!) 7 step process:

1. Download KkuetNetPrestashopWebServiceBundle using composer
2. Enable the Bundle
3. Configure the KkuetNetPrestashopWebServiceBundle

### Step 1: Download KkuetNetPrestashopWebServiceBundle using composer

Add KkuetNetPrestashopWebServiceBundle in your composer.json:

```js
{
    "require": {
        "kkuetnet/prestashopwebservice-bundle": "dev-master"
    }
}
```

Composer will install the bundle to your project's `vendor/kkuetnet` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new \KkuetNet\PrestashopWebServiceBundle\KkuetNetPrestashopWebServiceBundle(),
    );
}
```

### Step 3: Configure the KkuetNetPrestashopWebServiceBundle

[More information about Prestashop API](https://github.com/kkuetnet/PrestashopWebServiceBundle/blob/master/Resources/doc/webservice.pdf)
``` yaml
# app/config/config.yml
kkuet_net_prestashop_web_service:
  website: http://prestashop.kkuet.net/
  key: R03J6M0Z87H9P2ZRHTTPE72MU6RU34AB
```

### Step 4: HOW TO USE

``` php
namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        $persta = $this->container->get('prestashop_webservice')->getInstance();
        $result = $persta->get(array(
            "resource" => "products"
        ));
        
        var_dump($result);
    }
}
```