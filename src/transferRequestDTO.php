<?php

namespace Gam6itko\AdvCash;

/**
 * transferRequestDTO
 */
class transferRequestDTO
{
    /**
     * @access public
     * @var double
     */
    public $amount;
    /**
     * @access public
     * @var string
     */
    public $comment;
    /**
     * @access public
     * @var string
     */
    public $destWalletId;
    /**
     * @access public
     * @var boolean
     */
    public $savePaymentTemplate;
    /**
     * @access public
     * @var string
     */
    public $srcWalletId;
}