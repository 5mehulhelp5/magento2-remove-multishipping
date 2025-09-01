<?php
/**
 * Copyright 2011 Adobe
 * All Rights Reserved.
 */
namespace Magento\Multishipping\Block\Checkout;

class Billing extends \Magento\Payment\Block\Form\Container
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Payment\Helper\Data $paymentHelper,
        \Magento\Payment\Model\Checks\SpecificationFactory $methodSpecificationFactory,
        \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Payment\Model\Method\SpecificationInterface $paymentSpecification,
        array $data = [],
        array $additionalChecks = []
    ) {
        parent::__construct($context, $paymentHelper, $methodSpecificationFactory, $data, $additionalChecks);
        $this->_isScopePrivate = true;
    }
}
