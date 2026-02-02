<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134713_merge_fd_workingLocation_into_cardText migration.
 */
class m240917_134713_merge_fd_workingLocation_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = '1f8e940c-3d02-4006-84e4-b82311f4179e';
}
