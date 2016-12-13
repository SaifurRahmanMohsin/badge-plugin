<?php namespace Mohsin\Badge\Widgets;

use Backend\Classes\ReportWidgetBase;
use Mohsin\Badge\Classes\BadgeMaker;
use Mohsin\Badge\Models\Badge as BadgeModel;

class Badge extends ReportWidgetBase
{
    /**
     * @var string A unique alias to identify this widget.
     */
    protected $defaultAlias = 'badge';

    protected $definedProperties = [];

    protected $isOnForm = true;

    public function __construct($controller, $properties = [])
    {
        $this->properties = $this->validateProperties($this -> definedProperties);
        parent::__construct($controller);

        try {
            if($this->controller != null) $this->controller->formGetWidget();
        } catch (\BadMethodCallException $ex) {
            $this -> isOnForm = false;
        }
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

    public function getBadgeOptions()
    {
        return BadgeModel::all()->lists('subject','id');
    }

    public function render()
    {

        if($this -> isOnForm)
        {
            $data = post('Badge');
            $form = $this->controller->formGetWidget();
            $field = $form->getField('badge_preview');
            if(empty($data))
              {
                  $subject = $form->getField('subject')->value;
                  $status = $form->getField('status')->value;
                  $color = $form->getField('color')->value;
                  $format = $form->getField('style')->value;
              } else {
                  $subject = array_get($data, 'subject');
                  $status = array_get($data, 'status');
                  $color = array_get($data, 'color', '#facade');
                  $format = array_get($data, 'style', 'plastic');
              }
        } else {
            $id = $this->property('badge');
            $badge = BadgeModel::find($id);
            $subject = $badge -> subject;
            $status = $badge -> status;
            $color = $badge -> color;
            $format = $badge -> style;
        }

        $badge = BadgeMaker::instance()->getBadge($subject, $status, $color, $format);

        if($this -> isOnForm)
            return $this -> makePartial('form', ['badge' => $badge, 'field' => $field]);
        else
            return $this -> makePartial('widget', ['badge' => $badge]);
    }

    public function getSaveValue($value)
    {
         return \Backend\Classes\FormField::NO_SAVE_DATA;
    }
}
