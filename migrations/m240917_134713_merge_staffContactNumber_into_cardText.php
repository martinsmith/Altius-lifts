<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134713_merge_staffContactNumber_into_cardText migration.
 */
class m240917_134713_merge_staffContactNumber_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = 'fd91dbb7-acd5-4f1c-8ef2-5ba9e1910046';
}
