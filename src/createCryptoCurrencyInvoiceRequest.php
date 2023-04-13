<?php

namespace Gam6itko\AdvCash;

/**
 * createCryptoCurrencyInvoiceRequest
 */
class createCryptoCurrencyInvoiceRequest extends moneyRequest
{
    /**
     * @access public
     * @var tnscoinName
     */
    public $coinName;
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
    /**
     * @access public
     * @var tnstetherTransportProtocol
     */
    public $tetherTransportProtocol;
}