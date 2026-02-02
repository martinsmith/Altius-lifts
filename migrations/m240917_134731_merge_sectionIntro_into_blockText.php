<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134731_merge_sectionIntro_into_blockText migration.
 */
class m240917_134731_merge_sectionIntro_into_blockText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'cbaf71b5-75c1-4593-9f45-4113e7c5207e';
    public string $outgoingFieldUid = '3870c1f3-4745-47d3-aeec-208efaad29da';
}
