<?php

namespace Zemit\Core\Backend;

use Phalcon\DiInterface;
use Zemit\Core\Mvc\Module as CoreModule;

/**
 * @author Julien Turbide <jturbide@nuagerie.com>
 * @version 1.0.0
 */
class Module extends CoreModule
{
    public $name = self::NAME_BACKEND;
}
