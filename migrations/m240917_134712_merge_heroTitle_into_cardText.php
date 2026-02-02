<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134712_merge_heroTitle_into_cardText migration.
 */
class m240917_134712_merge_heroTitle_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = '0c9000a3-852e-4b03-a9bc-0648f0e90a18';
}
