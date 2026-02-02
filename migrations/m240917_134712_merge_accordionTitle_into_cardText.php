<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134712_merge_accordionTitle_into_cardText migration.
 */
class m240917_134712_merge_accordionTitle_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = 'b756cd7e-ab4b-4865-99a2-57668b69ca87';
}
