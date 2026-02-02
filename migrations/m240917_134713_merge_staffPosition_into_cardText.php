<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134713_merge_staffPosition_into_cardText migration.
 */
class m240917_134713_merge_staffPosition_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = '9e21d1f9-5776-4b80-9c58-0e6c06a34880';
}
