<?php declare(strict_types=1);
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Module\Setup\Validator;

use OxidEsales\EshopCommunity\Internal\Module\Configuration\DataObject\ModuleSetting;

/**
 * @internal
 */
class ControllersModuleSettingValidator implements ModuleSettingValidatorInterface
{
    /**
     * @param ModuleSetting $moduleSetting
     */
    public function validate(ModuleSetting $moduleSetting)
    {
        // TODO: Implement validate() method.
    }

    /**
     * @param ModuleSetting $moduleSetting
     * @return bool
     */
    public function canValidate(ModuleSetting $moduleSetting): bool
    {
        return false;
    }
}