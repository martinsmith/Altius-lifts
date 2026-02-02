<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134731_merge_fd_introText_into_blockText migration.
 */
class m240917_134731_merge_fd_introText_into_blockText extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = 'cbaf71b5-75c1-4593-9f45-4113e7c5207e';
    public string $outgoingFieldUid = 'c0a2acac-6483-470a-b14d-84f4859b7ce0';
}
