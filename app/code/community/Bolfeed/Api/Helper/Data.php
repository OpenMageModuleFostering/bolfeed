<?php
class Bolfeed_Api_Helper_Data extends Mage_Core_Helper_Data
{
	public function getExtensionVersion()
	{
		return (string) Mage::getConfig()->getNode()->modules->Bolfeed_Api->version;
	}
}