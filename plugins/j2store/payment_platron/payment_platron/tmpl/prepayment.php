<?php
/*
 * --------------------------------------------------------------------------------
   Weblogicx India  - J2 Store v 3.0 - Payment Plugin - SagePay
 * --------------------------------------------------------------------------------
 * @package		Joomla! 2.5x
 * @subpackage	J2 Store
 * @author    	Weblogicx India http://www.weblogicxindia.com
 * @copyright	Copyright (c) 2010 - 2015 Weblogicx India Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link		http://weblogicxindia.com
 * --------------------------------------------------------------------------------
*/

//no direct access
defined('_JEXEC') or die('Restricted access'); 



?>

<style type="text/css">
    #platron_form { width: 100%; }
    #platron_form td { padding: 5px; }
    #platron_form .field_name { font-weight: bold; }
</style>

<form action="<?php echo JRoute::_( "https://platron.ru/payment.php" ); ?>" method="post" name="adminForm" enctype="multipart/form-data">

	<?foreach($vars as $name => $value){?>
		<input type='hidden' name='<?echo $name?>' value='<?echo $value?>'>
    <?}?>
            
    <input type="submit" class="btn btn-primary button" value="<?php echo JText::_($this->params->get('button_text', 'J2STORE_PLATRON_COMPLITE'));?>" />
</form>