<?php
/**
 * Hello World! Module Entry Point
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_esfacebook
 * is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
//require_once dirname(__FILE__) . '/helper.php';

$id = $params->get('id_app',null);
$url = $params->get('url');


$script = "

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&autoLogAppEvents=1&version=v2.12&appId=". $id ."';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'))
";


$document = JFactory::getDocument();
$document->addScriptDeclaration($script);



/**
  * This retrieves the lang parameter we stored earlier. Note the second part
  * which states to use the default value of 1 if the parameter cannot be
  * retrieved for some reason
**/

require JModuleHelper::getLayoutPath('mod_esfacebook', $params->get('layout', 'default'));

?>