<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'easyadmin.paginator' shared service.

include_once $this->targetDirs[3].'/vendor/javiereguiluz/easyadmin-bundle/src/Search/Paginator.php';

return $this->services['easyadmin.paginator'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator();
