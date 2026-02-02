<?php

namespace craft\contentmigrations;

use Craft;
use craft\migrations\BaseFieldMergeMigration;

/**
 * m240917_134745_merge_fd_jobDescription_into_textBlock migration.
 */
class m240917_134745_merge_fd_jobDescription_into_textBlock extends BaseFieldMergeMigration
{
    public string $persistingFieldUid = '828d697f-6d07-4af1-9b83-fef2467ee74d';
    public string $outgoingFieldUid = 'f0a02e17-ecdb-41a5-a2df-cd6444f59476';
}
