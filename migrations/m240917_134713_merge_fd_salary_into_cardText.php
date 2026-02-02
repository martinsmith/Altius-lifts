<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134713_merge_fd_salary_into_cardText migration.
 */
class m240917_134713_merge_fd_salary_into_cardText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'aea2570e-71e8-49d8-bf72-d4c2bb30ce4b';
    public string $outgoingFieldUid = 'd19d4bf0-3c34-4e07-9701-2f7103137733';
}
