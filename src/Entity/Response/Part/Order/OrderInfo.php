<?php

namespace Apiship\Entity\Response\Part\Order;

use Apiship\Entity\AbstractResponsePart;

class OrderInfo extends AbstractResponsePart
{
    /**
     * @var int ID заказа
     */
    protected $orderId;
    /**
     * @var string Ключ провайдера (СД)
     */
    protected $providerNumber;
    /**
     * @var string Номер заказа клиента
     */
    protected $clientNumber;
    /**
     * @var string штрихкод
     */
    protected $barcode;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProviderNumber()
    {
        return $this->providerNumber;
    }

    /**
     * @param $providerNumber
     *
     * @return $this
     */
    public function setProviderNumber($providerNumber)
    {
        $this->providerNumber = $providerNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientNumber()
    {
        return $this->clientNumber;
    }

    /**
     * @param $clientNumber
     *
     * @return $this
     */
    public function setClientNumber($clientNumber)
    {
        $this->clientNumber = $clientNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return OrderInfo
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }
}