<?php
/**
 * Created by PhpStorm.
 * User: BENGEOS-PC
 * Date: 3/12/2016
 * Time: 6:24 AM
 */
namespace SMS_API;
return array(
    'router' => array(
        'routes' => array(
            'sms_api' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/sms_api',
                    'defaults' => array(
                        'controller' => 'SMS_API\Controller\api',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'SMS_API\Controller\api' => Controller\smsController::class,
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
    ),
);