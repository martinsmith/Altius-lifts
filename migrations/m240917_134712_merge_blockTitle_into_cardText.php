<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134712_merge_blockTitle_into_cardText migration.
 */
class m240917_134712_merge_blockTitle_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = '4a287bd1-a2e3-4446-a5de-b29271699083';
}
