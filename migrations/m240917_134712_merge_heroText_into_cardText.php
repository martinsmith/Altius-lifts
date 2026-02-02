<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134712_merge_heroText_into_cardText migration.
 */
class m240917_134712_merge_heroText_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = 'e4b1afa7-c9c7-41c1-8ba4-86de09a58113';
}
