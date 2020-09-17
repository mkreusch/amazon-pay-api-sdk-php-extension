<?php

namespace AmazonPayApiSdkExtension\Struct;

class DeliverySpecifications extends StructBase
{
    /**
     * @var array
     */
    protected $specialRestrictions;
    /**
     * @var AddressRestrictions
     */
    protected $addressRestrictions;

    /**
     * @return array
     */
    public function getSpecialRestrictions()
    {
        return $this->specialRestrictions;
    }

    /**
     * @param array $specialRestrictions
     *
     * @return DeliverySpecifications
     */
    public function setSpecialRestrictions($specialRestrictions)
    {
        $this->specialRestrictions = $specialRestrictions;

        return $this;
    }

    /**
     * @return \AmazonPayApiSdkExtension\Struct\AddressRestrictions
     */
    public function getAddressRestrictions()
    {
        return $this->addressRestrictions;
    }

    /**
     * @param \AmazonPayApiSdkExtension\Struct\AddressRestrictions $addressRestrictions
     *
     * @return DeliverySpecifications
     */
    public function setAddressRestrictions($addressRestrictions)
    {
        $this->addressRestrictions = $addressRestrictions;

        return $this;
    }


}
