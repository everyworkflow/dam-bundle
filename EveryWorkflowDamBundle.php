<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

declare(strict_types=1);

namespace EveryWorkflow\DamBundle;

use EveryWorkflow\DamBundle\DependencyInjection\DamExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EveryWorkflowDamBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new DamExtension();
    }
}
