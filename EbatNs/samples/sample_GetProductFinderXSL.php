<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetProductFinderXSLRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetProductFinderXSL
 * 
 * Sample call for GetProductFinderXSL
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetProductFinderXSL.php,v 1.90 2011-12-29 14:03:00 michaelcoslar Exp $
 * @access public 
 */
class sample_GetProductFinderXSL extends EbatNs_Environment
{

   /**
     * sample_GetProductFinderXSL::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
	public function dispatchCall ($params)
    {
        $req = new GetProductFinderXSLRequestType();
        
        $res = $this->proxy->GetProductFinderXSL($req);
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

$x = new sample_GetProductFinderXSL();
$x->dispatchCall(array());

?>