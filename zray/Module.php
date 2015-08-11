<?php
namespace AwsZray;

class Module extends \ZRay\ZRayModule {

    public function config() {
        return array(
            // The name defined in ZRayExtension
            'extension' => array(
                'name' => 'AWS',
            ),
            // Prevent those default panels from being displayed
            'defaultPanels' => array(
            ),
            // configure all custom panels
            'panels' => array(
                'metadataPanel' => array(
                    'alwaysShow' => true,
                    'display'    => true,
                    'logo'       => 'logo.png',
                    'menuTitle'  => 'AWS Metadata',
                    'panelTitle' => 'Amazon Web Services',
                ),
                'userdataPanel' => array(
                    'alwaysShow' => true,
                    'display'    => true,
                    'logo'       => 'logo.png',
                    'menuTitle'  => 'AWS Userdata',
                    'panelTitle' => 'Amazon Web Services',
                ),
            )
        );
    }
}