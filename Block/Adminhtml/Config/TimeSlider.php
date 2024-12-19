<?php
namespace Qoliber\DarkMode\Block\Adminhtml\Config;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;
use Magento\Framework\Exception\ValidatorException;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

/**
 * Class TimeSlider
 */
class TimeSlider extends Template implements RendererInterface, BlockInterface
{
    const BASE_CONFIG_PATH = "DarkMode/settings/";

    const TIME_NAME_FROM = 'light_theme_time_from';

    const TIME_NAME_TO   = 'light_theme_time_to';

    /**
     * Form element which re-rendering
     *
     * @var AbstractElement
     */
    protected $element;

    /**
     * @var string
     */
    protected $_template = 'Qoliber_DarkMode::config/renderer/time_slider.phtml';

    /**
     * @var string
     */
    protected $_htmlId = 'time-range';

    /**
     * Retrieve an element
     *
     * @return AbstractElement
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set an element
     *
     * @return $this
     */
    public function setElement(AbstractElement $element)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Render element
     *
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $this->element = $element;

        return $this->toHtml();
    }

    /**
     * @return string
     */
    public function getHtmlId()
    {
        return $this->_htmlId;
    }

    /**
     * @return string
     */
    public function getNameFrom()
    {
        return str_replace("/", "_", self::BASE_CONFIG_PATH) . self::TIME_NAME_FROM;
    }

    /**
     * @return string
     */
    public function getNameTo()
    {
        return str_replace("/", "_", self::BASE_CONFIG_PATH) . self::TIME_NAME_TO;
    }

    /**
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->_scopeConfig->getValue(self::BASE_CONFIG_PATH . self::TIME_NAME_FROM);
    }

    /**
     * @return string
     */
    public function getTimeTo()
    {
        return $this->_scopeConfig->getValue(self::BASE_CONFIG_PATH . self::TIME_NAME_TO);
    }

    /**
     * @param int $minutes
     * @return string
     */
    public function minutesToTime($minutes)
    {
        $hours   = floor($minutes / 60);
        $minutes %= 60;
        $part    = $hours >= 12 ? 'PM' : 'AM';

        return sprintf('%02d:%02d %s', $hours, $minutes, $part);
    }

    /**
     * @return string
     * @throws ValidatorException
     */
    protected function _toHtml()
    {
        if ($this->getTemplate() === '' || $this->getTemplate() === '0') {
            return '';
        }

        return $this->fetchView((string)$this->getTemplateFile());
    }
}
