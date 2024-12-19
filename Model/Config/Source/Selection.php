<?php

namespace Qoliber\DarkMode\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Selection implements OptionSourceInterface
{
    /**
     * @return array<int, array<string, string>>
     */
    public function toOptionArray()
    {
        return [
            [
                "value" => "auto",
                "label" => __("Auto")
            ],
            [
                "value" => "dark",
                "label" => __("Dark")
            ],
            [
                "value" => "light",
                "label" => __("Light")
            ]
        ];
    }
}
