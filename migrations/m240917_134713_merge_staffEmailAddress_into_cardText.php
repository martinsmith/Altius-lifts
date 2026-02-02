<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134713_merge_staffEmailAddress_into_cardText migration.
 */
class m240917_134713_merge_staffEmailAddress_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = '4c34060a-1ada-4ac6-8ae6-98212eedd352';
}
