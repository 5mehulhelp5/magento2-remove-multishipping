<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Multishipping\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @return int
     */
    public function getMaximumQty()
    {
        return 99999;
    }

    /**
     * @return bool
     */
    public function isMultishippingCheckoutAvailable()
    {
        return false;
    }
}
