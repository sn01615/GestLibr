<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GeteBayDetailsRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GeteBayDetails
 * 
 * Sample call for GeteBayDetails
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GeteBayDetails.php,v 1.90 2011-12-29 14:03:01 michaelcoslar Exp $
 * @access public 
 */
class sample_GeteBayDetails extends EbatNs_Environment
{

   /**
     * sample_GeteBayDetails::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GeteBayDetailsRequestType();
        $req->setDetailName($params['DetailName']);
		
        $res = $this->proxy->GeteBayDetails($req);
        if ($this->testValid($res))
        {
            $this->dumpObject($res);
            return (true);
        }
        else 
        {
            return (false);
        }
    }
}

$x = new sample_GeteBayDetails();
$x->dispatchCall
(
	array
	(
		'DetailName' => 'CountryDetails'
	)
);
?>
