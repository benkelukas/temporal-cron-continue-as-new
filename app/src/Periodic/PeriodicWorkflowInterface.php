<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Samples\Periodic;

use Temporal\Workflow\WorkflowInterface;
use Temporal\Workflow\WorkflowMethod;

#[WorkflowInterface]
interface PeriodicWorkflowInterface
{
    public const WORKFLOW_ID = 'periodic';

    /**
     * @param string $name
     * @return string
     */
    #[WorkflowMethod(name: "Periodic.greet")]
    public function greetPeriodically(
        string $name
    );
}