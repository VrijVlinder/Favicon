<?php if(!defined('APPLICATION')) exit();

//define plugin

$PluginInfo['Favicon'] = array(
    'Name' => 'Favicon',
    'Description' => 'Adds all the types of favicons needed for all types of devices and browsers. All you need to do is place the favicon images in the design folder of your theme',
    'Version' => '1.0',
    'MobileFriendly' => TRUE,
    'Author' => "VrijVlinder"
    
);

//Send meta tags for favicons to head
class FaviconPlugin extends Gdn_Plugin {

    public function Base_Render_Before($Sender) {
        $Sender->Head->AddTag('link', array('rel' => 'shortcut icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/favicon.ico'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/favicon.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon-57x57.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon-60x60.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon-72x72.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon-76x76.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon-114x114.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon-120x120.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon-144x144.png'));
        $Sender->Head->AddTag('link', array('rel' => 'apple-touch-icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/apple-touch-icon-152x152.png'));
        $Sender->Head->AddTag('link', array('rel' => 'icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/favicon-196x196.png'));
        $Sender->Head->AddTag('link', array('rel' => 'icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/favicon-160x160.png'));
        $Sender->Head->AddTag('link', array('rel' => 'icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/favicon-96x96.png'));
        $Sender->Head->AddTag('link', array('rel' => 'icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/favicon-32x32.png'));
        $Sender->Head->AddTag('link', array('rel' => 'icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/favicon-16x16.png'));
        $Sender->Head->AddTag('link', array('rel' => 'shortcut icon', 'href'=>'/themes/' . C('Garden.Theme') . '/design/favicon.gif'));
        
        $Sender->Head->AddTag('meta', array('name' => 'msapplication-TileColor', 'content'=>'#ffffff'));
        $Sender->Head->AddTag('meta', array('name' => 'msapplication-TileImage', 'content'=>'/mstile-144x144.png'));


    }

    public function Setup() {
    }
}
