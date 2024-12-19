<?php

namespace Qoliber\DarkMode\Model\Config\FrontendModel;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Exception\LocalizedException;

class TimeSlider extends Field
{

    /**
     * Retrieve element HTML markup
     *
     * @return string
     * @throws LocalizedException
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        /** @var \Qoliber\DarkMode\Block\Adminhtml\Config\TimeSlider $renderer */
        $renderer = $this->getLayout()->createBlock(
            \Qoliber\DarkMode\Block\Adminhtml\Config\TimeSlider::class
        );
        $renderer->setElement($element);

        return $renderer->toHtml();
    }
}
