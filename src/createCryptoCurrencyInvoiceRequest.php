<?php

namespace Gam6itko\AdvCash;

/**
 * createCryptoCurrencyInvoiceRequest
 */
class createCryptoCurrencyInvoiceRequest extends moneyRequest
{
    /**
     * @access public
     * @var scoinName
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
     * @var stetherTransportProtocol
     */
    public $tetherTransportProtocol;
}
