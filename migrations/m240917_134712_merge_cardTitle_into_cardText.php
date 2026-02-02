<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134712_merge_cardTitle_into_cardText migration.
 */
class m240917_134712_merge_cardTitle_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = 'c6648fe9-7bf9-4ccc-a9b3-db5a13ad3633';
}
