<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134713_merge_sectionTitle_into_cardText migration.
 */
class m240917_134713_merge_sectionTitle_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = 'e4fab69e-d246-4576-8932-f24e49f94e4a';
}
