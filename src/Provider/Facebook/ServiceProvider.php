<?php
/**
 * This file is part of the Zemit Framework.
 *
 * (c) Zemit Team <contact@zemit.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Zemit\Provider\Facebook;

use Phalcon\Di\DiInterface;
use Zemit\Provider\AbstractServiceProvider;

/**
 * Class ServiceProvider
 *
 * @author Julien Turbide <jturbide@nuagerie.com>
 * @copyright Zemit Team <contact@zemit.com>
 *
 * @since 1.0
 * @version 1.0
 *
 * @package Zemit\Provider\Facebook
 */
class ServiceProvider extends AbstractServiceProvider
{
    protected $serviceName = 'facebook';
    
    /**
     * {@inheritdoc}
     *
     * @param DiInterface $di
     */
    public function register(\Phalcon\Di\DiInterface $di): void
    {
        $di->setShared($this->getName(), function() use ($di) {
            $facebook = new Facebook();
            
            return $facebook;
        });
    }
}
