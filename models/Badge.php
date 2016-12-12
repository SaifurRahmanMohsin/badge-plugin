<?php namespace Mohsin\Badge\Models;

use Model;
use Mohsin\Badge\Classes\BadgeMaker;

/**
 * Badge Model
 */
class Badge extends Model
{

    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'subject' => 'required|max:255',
        'status' => 'required|max:255',
        'color' => 'required|regex:/^#[0-9a-fA-F]{6}$/',
        'style' => 'required|in:flat,flat-square,plastic,svg'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mohsin_badges';

    /**
     * @var string The style format of the rendered badge.
     */
    public function getStyleOptions()
    {
        return BadgeMaker::instance()->getStyleFormats();
    }

    /**
     * Increment hits count
     * @return void
     */
    public function hit()
    {
        $this
            ->newQuery()
            ->where('id', $this->id)
            ->update(['hits' => $this -> hits + 1])
        ;
    }

}
