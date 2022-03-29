<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Multishipping\Controller\Checkout;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Multishipping\Model\Checkout\Type\Multishipping;
use Magento\Multishipping\Model\Checkout\Type\Multishipping\State;

class Success extends Action
{
    public function __construct(
        Context $context,
        State $state,
        Multishipping $multishipping
    ) {
        parent::__construct($context);
    }
    
    public function execute()
    {
    }
}
