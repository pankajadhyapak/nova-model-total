<?php

namespace Pankajadhyapak\ModelTotal;

use Laravel\Nova\Card;

class ModelTotal extends Card
{
    public $modelName;

    public $displayName;

    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * ModelTotal constructor.
     * @param $modelName
     * @param null $displayName
     */
    public function __construct($modelName, $displayName = null)
    {
        $this->modelName = $modelName;
        $this->displayName = $displayName;

        if (class_exists($modelName)) {
            if (!$this->displayName) {
                $baseName = class_basename($this->modelName);
                $pural = str_plural($baseName);
                $this->displayName = "Total " . $pural;
            }

            $this->withMeta([
                'total' => $this->modelName::count(),
                'display_name' => $this->displayName
            ]);
        }
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'modelTotal';
    }
}
