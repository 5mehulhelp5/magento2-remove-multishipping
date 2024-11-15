<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Multishipping\Model\Checkout\Type;

use Magento\Customer\Api\AddressRepositoryInterface;
use Magento\Framework\Exception\NotFoundException;
use Magento\Framework\Pricing\PriceCurrencyInterface;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Model\Order\Email\Sender\OrderSender;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\ObjectManager;
use Magento\Directory\Model\AllowedCountries;
use Psr\Log\LoggerInterface;

/**
 * Multishipping checkout model
 *
 * @api
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CookieAndSessionMisuse)
 * @since 100.0.2
 */
class Multishipping extends \Magento\Framework\DataObject
{
    public function __construct(
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Sales\Model\OrderFactory $orderFactory,
        AddressRepositoryInterface $addressRepository,
        \Magento\Framework\Event\ManagerInterface $eventManager,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\Session\Generic $session,
        \Magento\Quote\Model\Quote\AddressFactory $addressFactory,
        \Magento\Quote\Model\Quote\Address\ToOrder $quoteAddressToOrder,
        \Magento\Quote\Model\Quote\Address\ToOrderAddress $quoteAddressToOrderAddress,
        \Magento\Quote\Model\Quote\Payment\ToOrderPayment $quotePaymentToOrderPayment,
        \Magento\Quote\Model\Quote\Item\ToOrderItem $quoteItemToOrderItem,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Payment\Model\Method\SpecificationInterface $paymentSpecification,
        \Magento\Multishipping\Helper\Data $helper,
        OrderSender $orderSender,
        PriceCurrencyInterface $priceCurrency,
        \Magento\Quote\Api\CartRepositoryInterface $quoteRepository,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\Api\FilterBuilder $filterBuilder,
        \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector,
        array $data = [],
        \Magento\Quote\Api\Data\CartExtensionFactory $cartExtensionFactory = null,
        AllowedCountries $allowedCountryReader = null,
        Multishipping\PlaceOrderFactory $placeOrderFactory = null,
        LoggerInterface $logger = null,
        \Magento\Framework\Api\DataObjectHelper $dataObjectHelper = null
    ) {
    }
    
    /**
     * Remove item from address
     *
     * @param int $addressId
     * @param int $itemId
     * @return \Magento\Multishipping\Model\Checkout\Type\Multishipping
     */
    public function removeAddressItem($addressId, $itemId)
    {
        return $this;
    }

    /**
     * Reimport customer address info to quote shipping address
     *
     * @param int $addressId customer address id
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return \Magento\Multishipping\Model\Checkout\Type\Multishipping
     */
    public function updateQuoteCustomerShippingAddress($addressId)
    {
        return $this;
    }

    /**
     * Create orders per each quote address
     *
     * @return \Magento\Multishipping\Model\Checkout\Type\Multishipping
     * @throws \Exception
     */
    public function createOrders()
    {
    }

    /**
     * Collect quote totals and save quote object
     *
     * @return \Magento\Multishipping\Model\Checkout\Type\Multishipping
     */
    public function save()
    {
        return $this;
    }

    /**
     * Specify BEGIN state in checkout session whot allow reinit multishipping checkout
     *
     * @return \Magento\Multishipping\Model\Checkout\Type\Multishipping
     */
    public function reset()
    {
        return $this;
    }

    /**
     * Check if quote amount is allowed for multishipping checkout
     *
     * @return bool
     */
    public function validateMinimumAmount()
    {
        return true;
    }
}
