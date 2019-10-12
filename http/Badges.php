<?php namespace Mohsin\Badge\Http;

use Backend\Classes\Controller;
use Mohsin\Badge\Classes\BadgeMaker;
use Mohsin\Badge\Models\Badge;

/**
 * Badges Back-end Controller
 */
class Badges extends Controller
{
    public $implement = [
        'Mohsin.Rest.Behaviors.RestController'
    ];

    public $restConfig = 'config_rest.yaml';

    public function show($id)
    {
        if (($badge = Badge::find($id))) {
            $subject = $badge -> subject;
            $status = $badge -> status;
            $color = $badge -> color;
            $format = $badge -> style;
            $badge -> hit();
            return BadgeMaker::instance()->getBadge($subject, $status, $color, $format);
        } else {
            return response()->json(e(trans('mohsin.badge::lang.controller.invalid_badge')), 404);
        }
    }
}
