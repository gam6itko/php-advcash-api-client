<?php

namespace Gam6itko\AdvCash;

/**
 * emailTransferRequestDTO
 */
class emailTransferRequestDTO
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
    public $destCurrency;
    /**
     * @access public
     * @var string
     */
    public $email;
    /**
     * @access public
     * @var string
     */
    public $srcWalletId;
}