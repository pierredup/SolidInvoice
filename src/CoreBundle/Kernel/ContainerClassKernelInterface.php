<?php

declare(strict_types=1);

/*
 * This file is part of SolidInvoice project.
 *
 * (c) 2013-2017 Pierre du Plessis <info@customscripts.co.za>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SolidInvoice\CoreBundle\Kernel;

use Symfony\Component\HttpKernel\KernelInterface;

interface ContainerClassKernelInterface extends KernelInterface
{
    /**
     * Return the name of the cached container class.
     */
    public function getContainerCacheClass(): string;

    /**
     * Sets the path to the config directory.
     */
    public function getConfigDir(): string;
}
