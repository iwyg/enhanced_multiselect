<?php
/*
vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4
*/

/**
 * @package Fields
 * @author thomas appel <mail@thomas-appel.com>

 * Displays <a href="http://opensource.org/licenses/gpl-3.0.html">GNU Public License</a>
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 */
cLass extension_enhanced_multiselect extends Extension
{

    /**
     * @see toolkit.Extension#getSubscribedDelegates
     */
    public function getSubscribedDelegates()
    {
        return array(
            array(
                'page' => '/backend/',
                'delegate' => 'AdminPagePreGenerate',
                'callback' => '__appendAssets'
            )
        );
    }

    /**
     * __appendAssets()
     *
     * append css and js assets for multiselectbox control
     *
     * @access public
     * @return void
     */
    public function __appendAssets()
    {
        $callback = Symphony::Engine()->getPageCallBack();
        if (($callback['driver'] == 'publish' && $callback['context']['page'] != 'index') || $callback['driver'] == 'blueprintssections') {
            Administration::instance()->Page->addStylesheetToHead(URL . '/extensions/enhanced_multiselect/assets/symphony.multiselect.css', 'screen', 100, false);
            Administration::instance()->Page->addScriptToHead(URL . '/extensions/enhanced_multiselect/assets/symphony.multiselect.js', 112, false);
            Administration::instance()->Page->addScriptToHead(URL . '/extensions/enhanced_multiselect/assets/multiselect.init.js', 113, false);
        }
    }
}
