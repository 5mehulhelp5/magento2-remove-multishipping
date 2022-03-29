<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Multishipping\Model\Checkout\Type\Multishipping;

use Magento\Checkout\Model\Session;
use Magento\Multishipping\Model\Checkout\Type\Multishipping;

/**
 * Multishipping checkout state model
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class State extends \Magento\Framework\DataObject
{
    const STEP_SELECT_ADDRESSES = 'multishipping_addresses';

    const STEP_SHIPPING = 'multishipping_shipping';

    const STEP_BILLING = 'multishipping_billing';

    const STEP_OVERVIEW = 'multishipping_overview';

    const STEP_SUCCESS = 'multishipping_success';

    const STEP_RESULTS = 'multishipping_results';

    /**
     * Allow steps array
     *
     * @var array
     */
    protected $_steps = [];

    /**
     * Retrieve available checkout steps
     *
     * @return array
     */
    public function getSteps()
    {
        return $this->_steps;
    }

    /**
     * @return bool
     */
    public function canSelectAddresses()
    {
    }

    /**
     * @return bool
     */
    public function canInputShipping()
    {
    }

    /**
     * @return bool
     */
    public function canSeeOverview()
    {
    }

    /**
     * @return bool
     */
    public function canSuccess()
    {
    }

}
