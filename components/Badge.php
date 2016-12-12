<?php namespace Mohsin\Badge\Components;

use Cms\Classes\ComponentBase;
use Mohsin\Badge\Classes\BadgeMaker;
use Mohsin\Badge\Models\Badge as BadgeModel;

class Badge extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'mohsin.badge::lang.badge.singular',
            'description' => 'mohsin.badge::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'badge' => [
                'title'             => 'mohsin.badge::lang.badge.singular',
                'type'              => 'dropdown',
                'default'           => 1,
            ]
        ];
    }

    public function onRun()
    {
        $id = $this->property('badge');
        $badge = BadgeModel::find($id);
        $subject = $badge -> subject;
        $status = $badge -> status;
        $color = $badge -> color;
        $format = $badge -> style;
        $badge -> hit();
        $badge = BadgeMaker::instance()->getBadge($subject, $status, $color, $format);
        $this->page['badge'] = $badge;
    }

    public function getBadgeOptions()
    {
        return BadgeModel::all()->lists('subject','id');
    }

}
