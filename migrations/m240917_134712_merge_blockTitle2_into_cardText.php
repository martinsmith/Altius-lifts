<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134712_merge_blockTitle2_into_cardText migration.
 */
class m240917_134712_merge_blockTitle2_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = 'bd5c1148-9502-44a3-b738-6d54e6c1e127';
}
