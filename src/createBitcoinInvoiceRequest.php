<?php

namespace Gam6itko\AdvCash;

/**
 * createBitcoinInvoiceRequest
 */
class createBitcoinInvoiceRequest extends moneyRequest
{
    /**
     * @access public
     * @var string
     */
    public $orderId;
    /**
     * @access public
     * @var string
     */
    public $sciName;
    /**
     * @access public
     * @var string
     */
    public $subMerchantURL;
}