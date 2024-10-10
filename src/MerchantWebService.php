<?php

namespace Gam6itko\AdvCash;

/**
 * MerchantWebService
 * @author WSDLInterpreter
 */
class MerchantWebService extends \SoapClient
{
    /**
     * Default class map for wsdl=>php
     * @access private
     * @var array
     */
    private static $classmap = array(
        'validationSendMoneyToAdvcashCard' => 'Gam6itko\AdvCash\validationSendMoneyToAdvcashCard',
        'authDTO' => 'Gam6itko\AdvCash\authDTO',
        'advcashCardTransferRequest' => 'Gam6itko\AdvCash\advcashCardTransferRequest',
        'moneyRequest' => 'Gam6itko\AdvCash\moneyRequest',
        'validationSendMoneyToAdvcashCardResponse' => 'Gam6itko\AdvCash\validationSendMoneyToAdvcashCardResponse',
        'sendMoneyToEcoinEU' => 'Gam6itko\AdvCash\sendMoneyToEcoinEU',
        'withdrawToEcurrencyRequest' => 'Gam6itko\AdvCash\withdrawToEcurrencyRequest',
        'sendMoneyToEcoinEUResponse' => 'Gam6itko\AdvCash\sendMoneyToEcoinEUResponse',
        'sendMoneyToEcoinEUResultHolder' => 'Gam6itko\AdvCash\sendMoneyToEcoinEUResultHolder',
        'sendMoneyToMarketResultHolder' => 'Gam6itko\AdvCash\sendMoneyToMarketResultHolder',
        'validationCurrencyExchange' => 'Gam6itko\AdvCash\validationCurrencyExchange',
        'currencyExchangeRequest' => 'Gam6itko\AdvCash\currencyExchangeRequest',
        'validationCurrencyExchangeResponse' => 'Gam6itko\AdvCash\validationCurrencyExchangeResponse',
        'history' => 'Gam6itko\AdvCash\history',
        'MerchantAPITransactionFilter' => 'Gam6itko\AdvCash\MerchantAPITransactionFilter',
        'historyResponse' => 'Gam6itko\AdvCash\historyResponse',
        'outcomingTransactionDTO' => 'Gam6itko\AdvCash\outcomingTransactionDTO',
        'abstractBaseDTO' => 'Gam6itko\AdvCash\abstractBaseDTO',
        'validateAccount' => 'Gam6itko\AdvCash\validateAccount',
        'validateAccountRequestDTO' => 'Gam6itko\AdvCash\validateAccountRequestDTO',
        'validateAccountResponse' => 'Gam6itko\AdvCash\validateAccountResponse',
        'validateAccountResultDTO' => 'Gam6itko\AdvCash\validateAccountResultDTO',
        'validateAccounts' => 'Gam6itko\AdvCash\validateAccounts',
        'validateAccountsResponse' => 'Gam6itko\AdvCash\validateAccountsResponse',
        'accountPresentDTO' => 'Gam6itko\AdvCash\accountPresentDTO',
        'validateCurrencyExchange' => 'Gam6itko\AdvCash\validateCurrencyExchange',
        'transferRequestDTO' => 'Gam6itko\AdvCash\transferRequestDTO',
        'validateCurrencyExchangeResponse' => 'Gam6itko\AdvCash\validateCurrencyExchangeResponse',
        'sendMoneyToExmo' => 'Gam6itko\AdvCash\sendMoneyToExmo',
        'sendMoneyToExmoResponse' => 'Gam6itko\AdvCash\sendMoneyToExmoResponse',
        'sendMoneyToExmoResultHolder' => 'Gam6itko\AdvCash\sendMoneyToExmoResultHolder',
        'register' => 'Gam6itko\AdvCash\register',
        'registrationRequest' => 'Gam6itko\AdvCash\registrationRequest',
        'registerResponse' => 'Gam6itko\AdvCash\registerResponse',
        'validationSendMoneyToWex' => 'Gam6itko\AdvCash\validationSendMoneyToWex',
        'validationSendMoneyToWexResponse' => 'Gam6itko\AdvCash\validationSendMoneyToWexResponse',
        'findTransaction' => 'Gam6itko\AdvCash\findTransaction',
        'findTransactionResponse' => 'Gam6itko\AdvCash\findTransactionResponse',
        'confirmCryptoCurrencyWithdrawalInvoice' => 'Gam6itko\AdvCash\confirmCryptoCurrencyWithdrawalInvoice',
        'confirmCryptoCurrencyWithdrawalInvoiceRequest' => 'Gam6itko\AdvCash\confirmCryptoCurrencyWithdrawalInvoiceRequest',
        'confirmCryptoCurrencyWithdrawalInvoiceResponse' => 'Gam6itko\AdvCash\confirmCryptoCurrencyWithdrawalInvoiceResponse',
        'findCryptoCurrencyWithdrawalInvoiceByOrderId' => 'Gam6itko\AdvCash\findCryptoCurrencyWithdrawalInvoiceByOrderId',
        'findCryptoCurrencyWithdrawalInvoiceByOrderIdResponse' => 'Gam6itko\AdvCash\findCryptoCurrencyWithdrawalInvoiceByOrderIdResponse',
        'cryptoCurrencyWithdrawalInvoiceDTO' => 'Gam6itko\AdvCash\cryptoCurrencyWithdrawalInvoiceDTO',
        'makeCurrencyExchange' => 'Gam6itko\AdvCash\makeCurrencyExchange',
        'makeCurrencyExchangeResponse' => 'Gam6itko\AdvCash\makeCurrencyExchangeResponse',
        'sendMoneyToEmail' => 'Gam6itko\AdvCash\sendMoneyToEmail',
        'sendMoneyRequest' => 'Gam6itko\AdvCash\sendMoneyRequest',
        'sendMoneyToEmailResponse' => 'Gam6itko\AdvCash\sendMoneyToEmailResponse',
        'validationSendMoneyToBankCard' => 'Gam6itko\AdvCash\validationSendMoneyToBankCard',
        'bankCardTransferRequest' => 'Gam6itko\AdvCash\bankCardTransferRequest',
        'validationSendMoneyToBankCardResponse' => 'Gam6itko\AdvCash\validationSendMoneyToBankCardResponse',
        'sendMoneyToAdvcashCard' => 'Gam6itko\AdvCash\sendMoneyToAdvcashCard',
        'sendMoneyToAdvcashCardResponse' => 'Gam6itko\AdvCash\sendMoneyToAdvcashCardResponse',
        'transferBankCard' => 'Gam6itko\AdvCash\transferBankCard',
        'bankCardTransferRequestDTO' => 'Gam6itko\AdvCash\bankCardTransferRequestDTO',
        'transferBankCardResponse' => 'Gam6itko\AdvCash\transferBankCardResponse',
        'currencyExchange' => 'Gam6itko\AdvCash\currencyExchange',
        'currencyExchangeResponse' => 'Gam6itko\AdvCash\currencyExchangeResponse',
        'sendMoney' => 'Gam6itko\AdvCash\sendMoney',
        'sendMoneyResponse' => 'Gam6itko\AdvCash\sendMoneyResponse',
        'validationSendMoneyToEcurrency' => 'Gam6itko\AdvCash\validationSendMoneyToEcurrency',
        'validationSendMoneyToEcurrencyResponse' => 'Gam6itko\AdvCash\validationSendMoneyToEcurrencyResponse',
        'sendMoneyToEcurrency' => 'Gam6itko\AdvCash\sendMoneyToEcurrency',
        'sendMoneyToEcurrencyResponse' => 'Gam6itko\AdvCash\sendMoneyToEcurrencyResponse',
        'transferAdvcashCard' => 'Gam6itko\AdvCash\transferAdvcashCard',
        'advcashCardTransferRequestDTO' => 'Gam6itko\AdvCash\advcashCardTransferRequestDTO',
        'transferAdvcashCardResponse' => 'Gam6itko\AdvCash\transferAdvcashCardResponse',
        'createCryptoCurrencyWithdrawalInvoice' => 'Gam6itko\AdvCash\createCryptoCurrencyWithdrawalInvoice',
        'createCryptoCurrencyWithdrawalInvoiceResponse' => 'Gam6itko\AdvCash\createCryptoCurrencyWithdrawalInvoiceResponse',
        'validateBankCardTransfer' => 'Gam6itko\AdvCash\validateBankCardTransfer',
        'validateBankCardTransferResponse' => 'Gam6itko\AdvCash\validateBankCardTransferResponse',
        'emailTransfer' => 'Gam6itko\AdvCash\emailTransfer',
        'emailTransferRequestDTO' => 'Gam6itko\AdvCash\emailTransferRequestDTO',
        'emailTransferResponse' => 'Gam6itko\AdvCash\emailTransferResponse',
        'makeTransfer' => 'Gam6itko\AdvCash\makeTransfer',
        'makeTransferResponse' => 'Gam6itko\AdvCash\makeTransferResponse',
        'validationSendMoneyToEmail' => 'Gam6itko\AdvCash\validationSendMoneyToEmail',
        'validationSendMoneyToEmailResponse' => 'Gam6itko\AdvCash\validationSendMoneyToEmailResponse',
        'withdrawalThroughExternalPaymentSystem' => 'Gam6itko\AdvCash\withdrawalThroughExternalPaymentSystem',
        'withdrawalThroughExternalPaymentSystemRequestDTO' => 'Gam6itko\AdvCash\withdrawalThroughExternalPaymentSystemRequestDTO',
        'withdrawalThroughExternalPaymentSystemResponse' => 'Gam6itko\AdvCash\withdrawalThroughExternalPaymentSystemResponse',
        'sendMoneyToBankCard' => 'Gam6itko\AdvCash\sendMoneyToBankCard',
        'sendMoneyToBankCardResponse' => 'Gam6itko\AdvCash\sendMoneyToBankCardResponse',
        'validationSendMoneyToEcoinEU' => 'Gam6itko\AdvCash\validationSendMoneyToEcoinEU',
        'validationSendMoneyToEcoinEUResponse' => 'Gam6itko\AdvCash\validationSendMoneyToEcoinEUResponse',
        'validationSendMoneyToExmo' => 'Gam6itko\AdvCash\validationSendMoneyToExmo',
        'validationSendMoneyToExmoResponse' => 'Gam6itko\AdvCash\validationSendMoneyToExmoResponse',
        'validateAdvcashCardTransfer' => 'Gam6itko\AdvCash\validateAdvcashCardTransfer',
        'validateAdvcashCardTransferResponse' => 'Gam6itko\AdvCash\validateAdvcashCardTransferResponse',
        'findPaymentByOrderId' => 'Gam6itko\AdvCash\findPaymentByOrderId',
        'paymentOrderRequest' => 'Gam6itko\AdvCash\paymentOrderRequest',
        'findPaymentByOrderIdResponse' => 'Gam6itko\AdvCash\findPaymentByOrderIdResponse',
        'paymentOrderResult' => 'Gam6itko\AdvCash\paymentOrderResult',
        'findCryptoCurrencyWithdrawalInvoiceById' => 'Gam6itko\AdvCash\findCryptoCurrencyWithdrawalInvoiceById',
        'findCryptoCurrencyWithdrawalInvoiceByIdResponse' => 'Gam6itko\AdvCash\findCryptoCurrencyWithdrawalInvoiceByIdResponse',
        'validateWithdrawalThroughExternalPaymentSystem' => 'Gam6itko\AdvCash\validateWithdrawalThroughExternalPaymentSystem',
        'validateWithdrawalThroughExternalPaymentSystemResponse' => 'Gam6itko\AdvCash\validateWithdrawalThroughExternalPaymentSystemResponse',
        'cancelProtectedTransfer' => 'Gam6itko\AdvCash\cancelProtectedTransfer',
        'cancelProtectedTransferResponse' => 'Gam6itko\AdvCash\cancelProtectedTransferResponse',
        'cancelProtectedTransferResultHolder' => 'Gam6itko\AdvCash\cancelProtectedTransferResultHolder',
        'createApi' => 'Gam6itko\AdvCash\createApi',
        'createApiRequest' => 'Gam6itko\AdvCash\createApiRequest',
        'createApiResponse' => 'Gam6itko\AdvCash\createApiResponse',
        'createCryptoCurrencyInvoice' => 'Gam6itko\AdvCash\createCryptoCurrencyInvoice',
        'createCryptoCurrencyInvoiceRequest' => 'Gam6itko\AdvCash\createCryptoCurrencyInvoiceRequest',
        'createCryptoCurrencyInvoiceResponse' => 'Gam6itko\AdvCash\createCryptoCurrencyInvoiceResponse',
        'createCryptoCurrencyInvoiceResult' => 'Gam6itko\AdvCash\createCryptoCurrencyInvoiceResult',
        'validateEmailTransfer' => 'Gam6itko\AdvCash\validateEmailTransfer',
        'validateEmailTransferResponse' => 'Gam6itko\AdvCash\validateEmailTransferResponse',
        'validateTransfer' => 'Gam6itko\AdvCash\validateTransfer',
        'validateTransferResponse' => 'Gam6itko\AdvCash\validateTransferResponse',
        'validationSendMoney' => 'Gam6itko\AdvCash\validationSendMoney',
        'validationSendMoneyResponse' => 'Gam6itko\AdvCash\validationSendMoneyResponse',
        'createBitcoinInvoice' => 'Gam6itko\AdvCash\createBitcoinInvoice',
        'createBitcoinInvoiceRequest' => 'Gam6itko\AdvCash\createBitcoinInvoiceRequest',
        'createBitcoinInvoiceResponse' => 'Gam6itko\AdvCash\createBitcoinInvoiceResponse',
        'createBitcoinInvoiceResult' => 'Gam6itko\AdvCash\createBitcoinInvoiceResult',
        'checkCurrencyExchange' => 'Gam6itko\AdvCash\checkCurrencyExchange',
        'checkCurrencyExchangeRequest' => 'Gam6itko\AdvCash\checkCurrencyExchangeRequest',
        'checkCurrencyExchangeResponse' => 'Gam6itko\AdvCash\checkCurrencyExchangeResponse',
        'checkCurrencyExchangeResultHolder' => 'Gam6itko\AdvCash\checkCurrencyExchangeResultHolder',
        'getBalances' => 'Gam6itko\AdvCash\getBalances',
        'getBalancesResponse' => 'Gam6itko\AdvCash\getBalancesResponse',
        'walletBalanceDTO' => 'Gam6itko\AdvCash\walletBalanceDTO',
        'sendMoneyToWex' => 'Gam6itko\AdvCash\sendMoneyToWex',
        'sendMoneyToWexResponse' => 'Gam6itko\AdvCash\sendMoneyToWexResponse',
        'sendMoneyToWexResultHolder' => 'Gam6itko\AdvCash\sendMoneyToWexResultHolder',
        'cardType' => 'Gam6itko\AdvCash\cardType',
        'currency' => 'Gam6itko\AdvCash\currency',
        'exceptionType' => 'Gam6itko\AdvCash\exceptionType',
        'coinName' => 'Gam6itko\AdvCash\coinName',
        'depositPaymentMethodType' => 'Gam6itko\AdvCash\depositPaymentMethodType',
        'dateIntervals' => 'Gam6itko\AdvCash\dateIntervals',
        'ecurrency' => 'Gam6itko\AdvCash\ecurrency',
        'currencyExchangeAction' => 'Gam6itko\AdvCash\currencyExchangeAction',
        'sortOrder' => 'Gam6itko\AdvCash\sortOrder',
        'transactionDirection' => 'Gam6itko\AdvCash\transactionDirection',
        'transactionName' => 'Gam6itko\AdvCash\transactionName',
        'transactionStatus' => 'Gam6itko\AdvCash\transactionStatus',
        'verificationStatus' => 'Gam6itko\AdvCash\verificationStatus',
        'supportedLanguage' => 'Gam6itko\AdvCash\supportedLanguage',
        'sciAllowedPaymentSystems' => 'Gam6itko\AdvCash\sciAllowedPaymentSystems',
        'cryptoCurrencyWithdrawalInvoiceStatus' => 'Gam6itko\AdvCash\cryptoCurrencyWithdrawalInvoiceStatus',
        'typeOfTransaction' => 'Gam6itko\AdvCash\typeOfTransaction',
        'externalSystemWithdrawalType' => 'Gam6itko\AdvCash\externalSystemWithdrawalType',
        'cryptoCurrencyDepositPaymentStatus' => 'Gam6itko\AdvCash\cryptoCurrencyDepositPaymentStatus',
        'paymentRequestStatus' => 'Gam6itko\AdvCash\paymentRequestStatus',
        'operationResult' => 'Gam6itko\AdvCash\operationResult',
        'tetherTransportProtocol' => 'Gam6itko\AdvCash\tetherTransportProtocol',
        'InternalException' => 'Gam6itko\AdvCash\InternalException',
        'BadParametersException' => 'Gam6itko\AdvCash\BadParametersException',
        'CardIsNotActiveException' => 'Gam6itko\AdvCash\CardIsNotActiveException',
        'LimitPerTransactionException' => 'Gam6itko\AdvCash\LimitPerTransactionException',
        'LimitPerMonthException' => 'Gam6itko\AdvCash\LimitPerMonthException',
        'WrongParamsException' => 'Gam6itko\AdvCash\WrongParamsException',
        'WrongIpException' => 'Gam6itko\AdvCash\WrongIpException',
        'UserBlockedException' => 'Gam6itko\AdvCash\UserBlockedException',
        'MerchantDisabledException' => 'Gam6itko\AdvCash\MerchantDisabledException',
        'CountLimitException' => 'Gam6itko\AdvCash\CountLimitException',
        'AdvcashCardMaxAllowedBalanceExceededException' => 'Gam6itko\AdvCash\AdvcashCardMaxAllowedBalanceExceededException',
        'AccessDeniedException' => 'Gam6itko\AdvCash\AccessDeniedException',
        'TransactionIsNotAvailableException' => 'Gam6itko\AdvCash\TransactionIsNotAvailableException',
        'LimitPerDayException' => 'Gam6itko\AdvCash\LimitPerDayException',
        'DatabaseException' => 'Gam6itko\AdvCash\DatabaseException',
        'CardDoesNotExistException' => 'Gam6itko\AdvCash\CardDoesNotExistException',
        'LifetimeLimitException' => 'Gam6itko\AdvCash\LifetimeLimitException',
        'WalletDoesNotExist' => 'Gam6itko\AdvCash\WalletDoesNotExist',
        'NotAuthException' => 'Gam6itko\AdvCash\NotAuthException',
        'NotEnoughMoneyException' => 'Gam6itko\AdvCash\NotEnoughMoneyException',
        'TransactionFailureException' => 'Gam6itko\AdvCash\TransactionFailureException',
        'LimitPerCardPerDayException' => 'Gam6itko\AdvCash\LimitPerCardPerDayException',
        'TransactionTemporaryNotAvailableException' => 'Gam6itko\AdvCash\TransactionTemporaryNotAvailableException',
        'ApiException' => 'Gam6itko\AdvCash\ApiException',
        'ExchangeCurrencyException' => 'Gam6itko\AdvCash\ExchangeCurrencyException',
        'NotEnoughMoneyApiException' => 'Gam6itko\AdvCash\NotEnoughMoneyApiException',
        'CallRestrictionException' => 'Gam6itko\AdvCash\CallRestrictionException',
        'LimitsException' => 'Gam6itko\AdvCash\LimitsException',
        'UserDoesNotExistException' => 'Gam6itko\AdvCash\UserDoesNotExistException',
        'EmailAlreadyExistException' => 'Gam6itko\AdvCash\EmailAlreadyExistException',
        'RegistrationException' => 'Gam6itko\AdvCash\RegistrationException',
        'JAXBException' => 'Gam6itko\AdvCash\JAXBException',
        'WrongEmailException' => 'Gam6itko\AdvCash\WrongEmailException',
        'AdditionalDataRequiredException' => 'Gam6itko\AdvCash\AdditionalDataRequiredException',
        'CardNumberIsNotValidException' => 'Gam6itko\AdvCash\CardNumberIsNotValidException',
        'NotSupportedBankBinException' => 'Gam6itko\AdvCash\NotSupportedBankBinException',
        'NotSupportedCountryException' => 'Gam6itko\AdvCash\NotSupportedCountryException',
        'WalletCurrencyIncorrectException' => 'Gam6itko\AdvCash\WalletCurrencyIncorrectException',
        'CodeIsNotValidException' => 'Gam6itko\AdvCash\CodeIsNotValidException',
        'DuplicateOrderIdException' => 'Gam6itko\AdvCash\DuplicateOrderIdException',
        'NotAvailableDepositSystemException' => 'Gam6itko\AdvCash\NotAvailableDepositSystemException',
    );

    /**
     * Constructor using wsdl location and options array
     * @param string $wsdl WSDL location for this service
     * @param array $options Options for the SoapClient
     */
    public function __construct($wsdl = "https://wallet.advcash.com/wsm/merchantWebService?wsdl", $options = array())
    {
        foreach (self::$classmap as $wsdlClassName => $phpClassName) {
            if (!isset($options['classmap'][$wsdlClassName])) {
                $options['classmap'][$wsdlClassName] = $phpClassName;
            }
        }
        $options['location'] = 'https://wallet.advcash.com/wsm/merchantWebService';
        if (LIBXML_VERSION < 20900) {
            libxml_disable_entity_loader(false);
        } else {
            libxml_set_external_entity_loader(static function ($public, $system, $context) {
                return false;
            });
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Checks if an argument list matches against a valid argument type list
     * @param array $arguments The argument list to check
     * @param array $validParameters A list of valid argument types
     * @return boolean true if arguments match against validParameters
     * @throws \Exception invalid function signature message
     */
    public function _checkArguments($arguments, $validParameters)
    {
        // adapt to Gam6itko\AdvCash\
        $validParameters = array_map(function ($str) {
            $type = trim($str, '()');
            return "(Gam6itko\\AdvCash\\$type)";
        }, $validParameters);

        $variables = "";
        foreach ($arguments as $arg) {
            $type = gettype($arg);
            if ($type == "object") {
                $type = get_class($arg);
            } else {
                $type = "(Gam6itko\\AdvCash\\$type)";
            }
            $variables .= "(" . $type . ")";
        }
        if (!in_array($variables, $validParameters)) {
            throw new \Exception("Invalid parameter types: " . str_replace(")(", ", ", $variables));
        }
        return true;
    }

    /**
     * Service Call: validationSendMoneyToAdvcashCard
     * Parameter options:
     * (validationSendMoneyToAdvcashCard) parameters
     * @param mixed,... See function description for parameter options
     * @return validationSendMoneyToAdvcashCardResponse
     * @throws \Exception invalid function signature message
     */
    public function validationSendMoneyToAdvcashCard($mixed = null)
    {
        $validParameters = array(
            "(validationSendMoneyToAdvcashCard)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationSendMoneyToAdvcashCard", $args);
    }


    /**
     * Service Call: sendMoneyToEcoinEU
     * Parameter options:
     * (sendMoneyToEcoinEU) parameters
     * @param mixed,... See function description for parameter options
     * @return sendMoneyToEcoinEUResponse
     * @throws \Exception invalid function signature message
     */
    public function sendMoneyToEcoinEU($mixed = null)
    {
        $validParameters = array(
            "(sendMoneyToEcoinEU)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("sendMoneyToEcoinEU", $args);
    }


    /**
     * Service Call: validationCurrencyExchange
     * Parameter options:
     * (validationCurrencyExchange) parameters
     * @param mixed,... See function description for parameter options
     * @return validationCurrencyExchangeResponse
     * @throws \Exception invalid function signature message
     */
    public function validationCurrencyExchange($mixed = null)
    {
        $validParameters = array(
            "(validationCurrencyExchange)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationCurrencyExchange", $args);
    }


    /**
     * Service Call: history
     * Parameter options:
     * (history) parameters
     * @param mixed,... See function description for parameter options
     * @return historyResponse
     * @throws \Exception invalid function signature message
     */
    public function history($mixed = null)
    {
        $validParameters = array(
            "(history)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("history", $args);
    }


    /**
     * Service Call: validateAccount
     * Parameter options:
     * (validateAccount) parameters
     * @param mixed,... See function description for parameter options
     * @return validateAccountResponse
     * @throws \Exception invalid function signature message
     */
    public function validateAccount($mixed = null)
    {
        $validParameters = array(
            "(validateAccount)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validateAccount", $args);
    }


    /**
     * Service Call: validateAccounts
     * Parameter options:
     * (validateAccounts) parameters
     * @param mixed,... See function description for parameter options
     * @return validateAccountsResponse
     * @throws \Exception invalid function signature message
     */
    public function validateAccounts($mixed = null)
    {
        $validParameters = array(
            "(validateAccounts)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validateAccounts", $args);
    }


    /**
     * Service Call: validateCurrencyExchange
     * Parameter options:
     * (validateCurrencyExchange) parameters
     * @param mixed,... See function description for parameter options
     * @return validateCurrencyExchangeResponse
     * @throws \Exception invalid function signature message
     */
    public function validateCurrencyExchange($mixed = null)
    {
        $validParameters = array(
            "(validateCurrencyExchange)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validateCurrencyExchange", $args);
    }


    /**
     * Service Call: sendMoneyToExmo
     * Parameter options:
     * (sendMoneyToExmo) parameters
     * @param mixed,... See function description for parameter options
     * @return sendMoneyToExmoResponse
     * @throws \Exception invalid function signature message
     */
    public function sendMoneyToExmo($mixed = null)
    {
        $validParameters = array(
            "(sendMoneyToExmo)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("sendMoneyToExmo", $args);
    }


    /**
     * Service Call: register
     * Parameter options:
     * (register) parameters
     * @param mixed,... See function description for parameter options
     * @return registerResponse
     * @throws \Exception invalid function signature message
     */
    public function register($mixed = null)
    {
        $validParameters = array(
            "(register)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("register", $args);
    }


    /**
     * Service Call: validationSendMoneyToWex
     * Parameter options:
     * (validationSendMoneyToWex) parameters
     * @param mixed,... See function description for parameter options
     * @return validationSendMoneyToWexResponse
     * @throws \Exception invalid function signature message
     */
    public function validationSendMoneyToWex($mixed = null)
    {
        $validParameters = array(
            "(validationSendMoneyToWex)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationSendMoneyToWex", $args);
    }


    /**
     * Service Call: findTransaction
     * Parameter options:
     * (findTransaction) parameters
     * @param mixed,... See function description for parameter options
     * @return findTransactionResponse
     * @throws \Exception invalid function signature message
     */
    public function findTransaction($mixed = null)
    {
        $validParameters = array(
            "(findTransaction)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("findTransaction", $args);
    }


    /**
     * Service Call: confirmCryptoCurrencyWithdrawalInvoice
     * Parameter options:
     * (confirmCryptoCurrencyWithdrawalInvoice) parameters
     * @param mixed,... See function description for parameter options
     * @return confirmCryptoCurrencyWithdrawalInvoiceResponse
     * @throws \Exception invalid function signature message
     */
    public function confirmCryptoCurrencyWithdrawalInvoice($mixed = null)
    {
        $validParameters = array(
            "(confirmCryptoCurrencyWithdrawalInvoice)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("confirmCryptoCurrencyWithdrawalInvoice", $args);
    }


    /**
     * Service Call: findCryptoCurrencyWithdrawalInvoiceByOrderId
     * Parameter options:
     * (findCryptoCurrencyWithdrawalInvoiceByOrderId) parameters
     * @param mixed,... See function description for parameter options
     * @return findCryptoCurrencyWithdrawalInvoiceByOrderIdResponse
     * @throws \Exception invalid function signature message
     */
    public function findCryptoCurrencyWithdrawalInvoiceByOrderId($mixed = null)
    {
        $validParameters = array(
            "(findCryptoCurrencyWithdrawalInvoiceByOrderId)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("findCryptoCurrencyWithdrawalInvoiceByOrderId", $args);
    }


    /**
     * Service Call: makeCurrencyExchange
     * Parameter options:
     * (makeCurrencyExchange) parameters
     * @param mixed,... See function description for parameter options
     * @return makeCurrencyExchangeResponse
     * @throws \Exception invalid function signature message
     */
    public function makeCurrencyExchange($mixed = null)
    {
        $validParameters = array(
            "(makeCurrencyExchange)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("makeCurrencyExchange", $args);
    }


    /**
     * Service Call: sendMoneyToEmail
     * Parameter options:
     * (sendMoneyToEmail) parameters
     * @param mixed,... See function description for parameter options
     * @return sendMoneyToEmailResponse
     * @throws \Exception invalid function signature message
     */
    public function sendMoneyToEmail($mixed = null)
    {
        $validParameters = array(
            "(sendMoneyToEmail)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("sendMoneyToEmail", $args);
    }


    /**
     * Service Call: validationSendMoneyToBankCard
     * Parameter options:
     * (validationSendMoneyToBankCard) parameters
     * @param mixed,... See function description for parameter options
     * @return validationSendMoneyToBankCardResponse
     * @throws \Exception invalid function signature message
     */
    public function validationSendMoneyToBankCard($mixed = null)
    {
        $validParameters = array(
            "(validationSendMoneyToBankCard)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationSendMoneyToBankCard", $args);
    }


    /**
     * Service Call: sendMoneyToAdvcashCard
     * Parameter options:
     * (sendMoneyToAdvcashCard) parameters
     * @param mixed,... See function description for parameter options
     * @return sendMoneyToAdvcashCardResponse
     * @throws \Exception invalid function signature message
     */
    public function sendMoneyToAdvcashCard($mixed = null)
    {
        $validParameters = array(
            "(sendMoneyToAdvcashCard)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("sendMoneyToAdvcashCard", $args);
    }


    /**
     * Service Call: transferBankCard
     * Parameter options:
     * (transferBankCard) parameters
     * @param mixed,... See function description for parameter options
     * @return transferBankCardResponse
     * @throws \Exception invalid function signature message
     */
    public function transferBankCard($mixed = null)
    {
        $validParameters = array(
            "(transferBankCard)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("transferBankCard", $args);
    }


    /**
     * Service Call: currencyExchange
     * Parameter options:
     * (currencyExchange) parameters
     * @param mixed,... See function description for parameter options
     * @return currencyExchangeResponse
     * @throws \Exception invalid function signature message
     */
    public function currencyExchange($mixed = null)
    {
        $validParameters = array(
            "(currencyExchange)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("currencyExchange", $args);
    }


    /**
     * Service Call: sendMoney
     * Parameter options:
     * (sendMoney) parameters
     * @param mixed,... See function description for parameter options
     * @return sendMoneyResponse
     * @throws \Exception invalid function signature message
     */
    public function sendMoney($mixed = null)
    {
        $validParameters = array(
            "(sendMoney)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("sendMoney", $args);
    }


    /**
     * Service Call: validationSendMoneyToEcurrency
     * Parameter options:
     * (validationSendMoneyToEcurrency) parameters
     * @param mixed,... See function description for parameter options
     * @return validationSendMoneyToEcurrencyResponse
     * @throws \Exception invalid function signature message
     */
    public function validationSendMoneyToEcurrency($mixed = null)
    {
        $validParameters = array(
            "(validationSendMoneyToEcurrency)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationSendMoneyToEcurrency", $args);
    }


    /**
     * Service Call: sendMoneyToEcurrency
     * Parameter options:
     * (sendMoneyToEcurrency) parameters
     * @param mixed,... See function description for parameter options
     * @return sendMoneyToEcurrencyResponse
     * @throws \Exception invalid function signature message
     */
    public function sendMoneyToEcurrency($mixed = null)
    {
        $validParameters = array(
            "(sendMoneyToEcurrency)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("sendMoneyToEcurrency", $args);
    }


    /**
     * Service Call: transferAdvcashCard
     * Parameter options:
     * (transferAdvcashCard) parameters
     * @param mixed,... See function description for parameter options
     * @return transferAdvcashCardResponse
     * @throws \Exception invalid function signature message
     */
    public function transferAdvcashCard($mixed = null)
    {
        $validParameters = array(
            "(transferAdvcashCard)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("transferAdvcashCard", $args);
    }


    /**
     * Service Call: createCryptoCurrencyWithdrawalInvoice
     * Parameter options:
     * (createCryptoCurrencyWithdrawalInvoice) parameters
     * @param mixed,... See function description for parameter options
     * @return createCryptoCurrencyWithdrawalInvoiceResponse
     * @throws \Exception invalid function signature message
     */
    public function createCryptoCurrencyWithdrawalInvoice($mixed = null)
    {
        $validParameters = array(
            "(createCryptoCurrencyWithdrawalInvoice)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("createCryptoCurrencyWithdrawalInvoice", $args);
    }


    /**
     * Service Call: validateBankCardTransfer
     * Parameter options:
     * (validateBankCardTransfer) parameters
     * @param mixed,... See function description for parameter options
     * @return validateBankCardTransferResponse
     * @throws \Exception invalid function signature message
     */
    public function validateBankCardTransfer($mixed = null)
    {
        $validParameters = array(
            "(validateBankCardTransfer)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validateBankCardTransfer", $args);
    }


    /**
     * Service Call: emailTransfer
     * Parameter options:
     * (emailTransfer) parameters
     * @param mixed,... See function description for parameter options
     * @return emailTransferResponse
     * @throws \Exception invalid function signature message
     */
    public function emailTransfer($mixed = null)
    {
        $validParameters = array(
            "(emailTransfer)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("emailTransfer", $args);
    }


    /**
     * Service Call: makeTransfer
     * Parameter options:
     * (makeTransfer) parameters
     * @param mixed,... See function description for parameter options
     * @return makeTransferResponse
     * @throws \Exception invalid function signature message
     */
    public function makeTransfer($mixed = null)
    {
        $validParameters = array(
            "(makeTransfer)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("makeTransfer", $args);
    }


    /**
     * Service Call: validationSendMoneyToEmail
     * Parameter options:
     * (validationSendMoneyToEmail) parameters
     * @param mixed,... See function description for parameter options
     * @return validationSendMoneyToEmailResponse
     * @throws \Exception invalid function signature message
     */
    public function validationSendMoneyToEmail($mixed = null)
    {
        $validParameters = array(
            "(validationSendMoneyToEmail)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationSendMoneyToEmail", $args);
    }


    /**
     * Service Call: withdrawalThroughExternalPaymentSystem
     * Parameter options:
     * (withdrawalThroughExternalPaymentSystem) parameters
     * @param mixed,... See function description for parameter options
     * @return withdrawalThroughExternalPaymentSystemResponse
     * @throws \Exception invalid function signature message
     */
    public function withdrawalThroughExternalPaymentSystem($mixed = null)
    {
        $validParameters = array(
            "(withdrawalThroughExternalPaymentSystem)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("withdrawalThroughExternalPaymentSystem", $args);
    }


    /**
     * Service Call: sendMoneyToBankCard
     * Parameter options:
     * (sendMoneyToBankCard) parameters
     * @param mixed,... See function description for parameter options
     * @return sendMoneyToBankCardResponse
     * @throws \Exception invalid function signature message
     */
    public function sendMoneyToBankCard($mixed = null)
    {
        $validParameters = array(
            "(sendMoneyToBankCard)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("sendMoneyToBankCard", $args);
    }


    /**
     * Service Call: validationSendMoneyToEcoinEU
     * Parameter options:
     * (validationSendMoneyToEcoinEU) parameters
     * @param mixed,... See function description for parameter options
     * @return validationSendMoneyToEcoinEUResponse
     * @throws \Exception invalid function signature message
     */
    public function validationSendMoneyToEcoinEU($mixed = null)
    {
        $validParameters = array(
            "(validationSendMoneyToEcoinEU)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationSendMoneyToEcoinEU", $args);
    }


    /**
     * Service Call: validationSendMoneyToExmo
     * Parameter options:
     * (validationSendMoneyToExmo) parameters
     * @param mixed,... See function description for parameter options
     * @return validationSendMoneyToExmoResponse
     * @throws \Exception invalid function signature message
     */
    public function validationSendMoneyToExmo($mixed = null)
    {
        $validParameters = array(
            "(validationSendMoneyToExmo)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationSendMoneyToExmo", $args);
    }


    /**
     * Service Call: validateAdvcashCardTransfer
     * Parameter options:
     * (validateAdvcashCardTransfer) parameters
     * @param mixed,... See function description for parameter options
     * @return validateAdvcashCardTransferResponse
     * @throws \Exception invalid function signature message
     */
    public function validateAdvcashCardTransfer($mixed = null)
    {
        $validParameters = array(
            "(validateAdvcashCardTransfer)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validateAdvcashCardTransfer", $args);
    }


    /**
     * Service Call: findPaymentByOrderId
     * Parameter options:
     * (findPaymentByOrderId) parameters
     * @param mixed,... See function description for parameter options
     * @return findPaymentByOrderIdResponse
     * @throws \Exception invalid function signature message
     */
    public function findPaymentByOrderId($mixed = null)
    {
        $validParameters = array(
            "(findPaymentByOrderId)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("findPaymentByOrderId", $args);
    }


    /**
     * Service Call: findCryptoCurrencyWithdrawalInvoiceById
     * Parameter options:
     * (findCryptoCurrencyWithdrawalInvoiceById) parameters
     * @param mixed,... See function description for parameter options
     * @return findCryptoCurrencyWithdrawalInvoiceByIdResponse
     * @throws \Exception invalid function signature message
     */
    public function findCryptoCurrencyWithdrawalInvoiceById($mixed = null)
    {
        $validParameters = array(
            "(findCryptoCurrencyWithdrawalInvoiceById)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("findCryptoCurrencyWithdrawalInvoiceById", $args);
    }


    /**
     * Service Call: validateWithdrawalThroughExternalPaymentSystem
     * Parameter options:
     * (validateWithdrawalThroughExternalPaymentSystem) parameters
     * @param mixed,... See function description for parameter options
     * @return validateWithdrawalThroughExternalPaymentSystemResponse
     * @throws \Exception invalid function signature message
     */
    public function validateWithdrawalThroughExternalPaymentSystem($mixed = null)
    {
        $validParameters = array(
            "(validateWithdrawalThroughExternalPaymentSystem)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validateWithdrawalThroughExternalPaymentSystem", $args);
    }


    /**
     * Service Call: cancelProtectedTransfer
     * Parameter options:
     * (cancelProtectedTransfer) parameters
     * @param mixed,... See function description for parameter options
     * @return cancelProtectedTransferResponse
     * @throws \Exception invalid function signature message
     */
    public function cancelProtectedTransfer($mixed = null)
    {
        $validParameters = array(
            "(cancelProtectedTransfer)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("cancelProtectedTransfer", $args);
    }


    /**
     * Service Call: createApi
     * Parameter options:
     * (createApi) parameters
     * @param mixed,... See function description for parameter options
     * @return createApiResponse
     * @throws \Exception invalid function signature message
     */
    public function createApi($mixed = null)
    {
        $validParameters = array(
            "(createApi)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("createApi", $args);
    }


    /**
     * Service Call: createCryptoCurrencyInvoice
     * Parameter options:
     * (createCryptoCurrencyInvoice) parameters
     * @param mixed,... See function description for parameter options
     * @return createCryptoCurrencyInvoiceResponse
     * @throws \Exception invalid function signature message
     */
    public function createCryptoCurrencyInvoice($mixed = null)
    {
        $validParameters = array(
            "(createCryptoCurrencyInvoice)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("createCryptoCurrencyInvoice", $args);
    }


    /**
     * Service Call: validateEmailTransfer
     * Parameter options:
     * (validateEmailTransfer) parameters
     * @param mixed,... See function description for parameter options
     * @return validateEmailTransferResponse
     * @throws \Exception invalid function signature message
     */
    public function validateEmailTransfer($mixed = null)
    {
        $validParameters = array(
            "(validateEmailTransfer)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validateEmailTransfer", $args);
    }


    /**
     * Service Call: validateTransfer
     * Parameter options:
     * (validateTransfer) parameters
     * @param mixed,... See function description for parameter options
     * @return validateTransferResponse
     * @throws \Exception invalid function signature message
     */
    public function validateTransfer($mixed = null)
    {
        $validParameters = array(
            "(validateTransfer)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validateTransfer", $args);
    }


    /**
     * Service Call: validationSendMoney
     * Parameter options:
     * (validationSendMoney) parameters
     * @param mixed,... See function description for parameter options
     * @return validationSendMoneyResponse
     * @throws \Exception invalid function signature message
     */
    public function validationSendMoney($mixed = null)
    {
        $validParameters = array(
            "(validationSendMoney)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("validationSendMoney", $args);
    }


    /**
     * Service Call: createBitcoinInvoice
     * Parameter options:
     * (createBitcoinInvoice) parameters
     * @param mixed,... See function description for parameter options
     * @return createBitcoinInvoiceResponse
     * @throws \Exception invalid function signature message
     */
    public function createBitcoinInvoice($mixed = null)
    {
        $validParameters = array(
            "(createBitcoinInvoice)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("createBitcoinInvoice", $args);
    }


    /**
     * Service Call: checkCurrencyExchange
     * Parameter options:
     * (checkCurrencyExchange) parameters
     * @param mixed,... See function description for parameter options
     * @return checkCurrencyExchangeResponse
     * @throws \Exception invalid function signature message
     */
    public function checkCurrencyExchange($mixed = null)
    {
        $validParameters = array(
            "(checkCurrencyExchange)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("checkCurrencyExchange", $args);
    }


    /**
     * Service Call: getBalances
     * Parameter options:
     * (getBalances) parameters
     * @param mixed,... See function description for parameter options
     * @return getBalancesResponse
     * @throws \Exception invalid function signature message
     */
    public function getBalances($mixed = null)
    {
        $validParameters = array(
            "(getBalances)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("getBalances", $args);
    }


    /**
     * Service Call: sendMoneyToWex
     * Parameter options:
     * (sendMoneyToWex) parameters
     * @param mixed,... See function description for parameter options
     * @return sendMoneyToWexResponse
     * @throws \Exception invalid function signature message
     */
    public function sendMoneyToWex($mixed = null)
    {
        $validParameters = array(
            "(sendMoneyToWex)",
        );
        $args = func_get_args();
        $this->_checkArguments($args, $validParameters);
        return $this->__soapCall("sendMoneyToWex", $args);
    }

    public function getAuthenticationToken($securityWord)
    {
        $gmt = gmdate('Ymd:H');
        $token = hash("sha256", $securityWord . ':' . $gmt);
        return $token;
    }
}
