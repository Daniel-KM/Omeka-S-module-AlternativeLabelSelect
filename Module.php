<?php declare(strict_types=1);

namespace AlternativeLabelSelect;

use Omeka\Module\AbstractModule;

/**
 * Alternative Label Select.
 *
 * @copyright Daniel Berthereau, 2020-2024
 * @license http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
 */
class Module extends AbstractModule
{
    /**
     * Get the config of the current module.
     *
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
