<?php
namespace Composer\Installers;

class SurveyGenerateInstaller extends BaseInstaller
{
    protected $locations = array(
        'provider' => 'provider/{$name}/',
        'templates'   => 'templates/{$name}/'
    );
}
