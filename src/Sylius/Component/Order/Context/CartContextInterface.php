<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Order\Context;

use Sylius\Component\Order\Model\OrderInterface;

interface CartContextInterface
{
    /**
     * @return OrderInterface
     *
     * @throws CartNotFoundException
     */
    public function getCart(): OrderInterface;
}
