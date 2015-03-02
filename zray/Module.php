<?php
namespace AwsZray;

class Module extends \ZRay\ZRayModule {

    public function config() {
        return array(
            // The name defined in ZRayExtension
            'extension' => array(
                'name' => 'AwsZray',
            ),
            // Prevent those default panels from being displayed
            'defaultPanels' => array(
            ),
            // configure all custom panels
            'panels' => array(
                'awsPanel' => array(
                    'alwaysShow' => true,
                    'display'    => true,
                    'logo'       => 'logo.png',
                    'menuTitle'  => 'AWS',
                    'panelTitle' => 'Amazon Web Services',
                ),
            )
        );
    }
}