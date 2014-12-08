<?php
namespace Composer\Installers;

class SurveyGenerateInstaller extends BaseInstaller
{
    protected $locations = array(
        'provider' => 'providers/{$name}/',
        'generator'   => 'generators/{$name}/'
    );
}
