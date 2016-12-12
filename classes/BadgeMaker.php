<?php namespace Mohsin\Badge\Classes;

use PUGX\Poser\Poser;

class BadgeMaker
{
    use \October\Rain\Support\Traits\Singleton;

    protected $styleFormats = [
          [ 'slug' => 'flat', 'class' => 'SvgFlatRender', 'name' => 'Flat' ],
          [ 'slug' => 'flat-square', 'class' => 'SvgFlatSquareRender', 'name' => 'Flat Square' ],
          [ 'slug' => 'svg', 'class' => 'SvgFlatRender', 'name' => 'Svg' ],
          [ 'slug' => 'plastic', 'class' => 'SvgRender', 'name' => 'Plastic' ]
    ];

    /**
     * @var array Returns the style format keys with the proper names.
     */
    public function getStyleFormats()
    {
        return array_column($this -> styleFormats, 'name', 'slug');
    }

    /**
     * @var arrayOrNull Returns the details given the format. Null otherwise
     */
    public function getDetailsFromFormat($slug)
    {
        foreach($this->styleFormats as $style)
          {
              if($style['slug'] == $slug)
                return $style;
          }
        return null;
    }

    /**
     * @var HTML Returns the rendered badge.
     */
    public function getBadge($subject, $status, $color, $format)
    {
        $data = $this -> getDetailsFromFormat($format);
        if(empty($data)) return '';

        $renderClass = 'PUGX\Poser\Render\\' . $data['class'];
        $render = new $renderClass();
        $poser = new Poser(array($render));
        return $poser->generate($subject, $status, substr($color, -6), $format);
    }
}
