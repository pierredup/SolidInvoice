<?php

declare(strict_types=1);

/*
 * This file is part of SolidInvoice project.
 *
 * (c) Pierre du Plessis <open-source@solidworx.co>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SolidInvoice\UserBundle\Action\Security;

use SolidInvoice\UserBundle\Form\Handler\PasswordChangeHandler;
use SolidWorx\FormHandler\FormHandler;

final class ChangePassword
{
    public function __invoke(FormHandler $formHandler)
    {
        return $formHandler->handle(PasswordChangeHandler::class);
    }
}
