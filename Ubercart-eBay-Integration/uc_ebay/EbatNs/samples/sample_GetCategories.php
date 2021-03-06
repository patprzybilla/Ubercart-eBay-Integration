<?php
/**
 * sources
 */
require_once 'setincludepath.php';
require_once 'GetCategoriesRequestType.php';
require_once 'EbatNs_Environment.php';

/**
 * sample_GetCategories
 * 
 * Sample call for GetCategories
 * 
 * @package ebatns
 * @subpackage samples_trading
 * @author johann 
 * @copyright Copyright (c) 2008
 * @version $Id: sample_GetCategories.php,v 1.2 2008/06/30 12:50:01 michael Exp $
 * @access public 
 */
class sample_GetCategories extends EbatNs_Environment
{

   /**
     * sample_GetCategories::dispatchCall()
     * 
     * Dispatch the call
     *
     * @param array $params array of parameters for the eBay API call
     * 
     * @return boolean success
     */
    public function dispatchCall ($params)
    {
        $req = new GetCategoriesRequestType();
		$req->setCategoryParent($params['CategoryParent']);
		
        $res = $this->proxy->GetCategories($req);
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

$x = new sample_GetCategories();
$x->dispatchCall
(
	array
	(
		'CategoryParent' => '1'
	)
);
?>
