<?php namespace Mohsin\Badge;

use Backend;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * Badges Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'mohsin.badge::lang.plugin.name',
            'description' => 'mohsin.badge::lang.plugin.description',
            'author'      => 'Saifur Rahman Mohsin',
            'icon'        => 'icon-shield'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Mohsin\Badge\Components\Badge' => 'badge',
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'badges' => [
                'label'       => 'mohsin.badge::lang.badge.plural',
                'description' => 'mohsin.badge::lang.plugin.description',
                'url'         => Backend::url('mohsin/badge/badges'),
                'icon'        => 'icon-shield',
                'category'    => SettingsManager::CATEGORY_CMS,
                'order'       => 900,
            ],
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Mohsin\Badge\Widgets\Badge' => 'badge'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Mohsin\Badge\Widgets\Badge' => [
                'label'   => 'mohsin.badge::lang.badge.singular',
                'context' => 'dashboard'
            ]
        ];
    }

}
