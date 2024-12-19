<?php
/**
 * Created by Q-Solutions Studio
 * Qoliber
 *
 * @package  Qoliber_DarkMode
 * @author   Jakub Winkler <jwinkler@qoliber.com> @MagentoNinja
 * @author   Przemysław Jankowski <pjankowski@qoliber.com>
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Qoliber_DarkMode',
    __DIR__
);
