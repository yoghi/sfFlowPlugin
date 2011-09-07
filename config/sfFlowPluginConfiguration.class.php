<?php

/**
 * sfFlowLinkPlugin configuration.
 *
 * @package     sfFlowLinkPlugin
 * @subpackage  config
 * @author      Stefano Tamagnini
 * @version     SVN: $Id: PluginConfiguration.class.php 17207 2009-04-10 15:36:26Z Kris.Wallsmith $
 */
class sfFlowLinkPluginConfiguration extends sfPluginConfiguration
{
	const VERSION = '1.0.0-DEV';

	/**
	 * @see sfPluginConfiguration
	 */
	public function initialize()
	{

//		foreach (array('sfDynamicForm') as $module)
//		{
//			if (in_array($module, sfConfig::get('sf_enabled_modules', array())))
//			{
//				//$this->dispatcher->connect('routing.load_configuration', array('sfDynamicFormPluginRouting', 'addRouteFor'.str_replace('sfDynamicForm', '', $module)));
//				$this->dispatcher->connect('routing.load_configuration', array('sfDynamicFormPluginRouting', 'addRouteForPlugin'));
//			}
//		}
	}
}
