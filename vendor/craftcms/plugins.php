<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'verbb/field-manager' => 
  array (
    'class' => 'verbb\\fieldmanager\\FieldManager',
    'basePath' => $vendorDir . '/verbb/field-manager/src',
    'handle' => 'field-manager',
    'aliases' => 
    array (
      '@verbb/fieldmanager' => $vendorDir . '/verbb/field-manager/src',
    ),
    'name' => 'Field Manager',
    'version' => '4.0.3',
    'description' => 'Manage your fields and field groups with ease.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/field-manager',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/field-manager/craft-5/CHANGELOG.md',
  ),
  'verbb/cloner' => 
  array (
    'class' => 'verbb\\cloner\\Cloner',
    'basePath' => $vendorDir . '/verbb/cloner/src',
    'handle' => 'cloner',
    'aliases' => 
    array (
      '@verbb/cloner' => $vendorDir . '/verbb/cloner/src',
    ),
    'name' => 'Cloner',
    'version' => '3.0.2',
    'description' => 'Easily clone sections, entry types, groups and more.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/cloner',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/cloner/craft-5/CHANGELOG.md',
  ),
  'craftcms/contact-form' => 
  array (
    'class' => 'craft\\contactform\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form/src',
    'handle' => 'contact-form',
    'aliases' => 
    array (
      '@craft/contactform' => $vendorDir . '/craftcms/contact-form/src',
    ),
    'name' => 'Contact Form',
    'version' => '3.1.0',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/contact-form/blob/v2/README.md',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
  'nystudio107/craft-seomatic' => 
  array (
    'class' => 'nystudio107\\seomatic\\Seomatic',
    'basePath' => $vendorDir . '/nystudio107/craft-seomatic/src',
    'handle' => 'seomatic',
    'aliases' => 
    array (
      '@nystudio107/seomatic' => $vendorDir . '/nystudio107/craft-seomatic/src',
    ),
    'name' => 'SEOmatic',
    'version' => '5.1.19',
    'description' => 'SEOmatic facilitates modern SEO best practices & implementation for Craft CMS 5. It is a turnkey SEO system that is comprehensive, powerful, and flexible.',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'documentationUrl' => 'https://nystudio107.com/docs/seomatic/',
  ),
  'craftcms/ckeditor' => 
  array (
    'class' => 'craft\\ckeditor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/ckeditor/src',
    'handle' => 'ckeditor',
    'aliases' => 
    array (
      '@craft/ckeditor' => $vendorDir . '/craftcms/ckeditor/src',
    ),
    'name' => 'CKEditor',
    'version' => '4.11.0',
    'description' => 'Edit rich text content in Craft CMS using CKEditor.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/ckeditor/blob/master/README.md',
  ),
  'martinsmith/craft-entry-level' => 
  array (
    'class' => 'martinsmith\\entrylevel\\Plugin',
    'basePath' => $vendorDir . '/martinsmith/craft-entry-level/src',
    'handle' => 'entry-level',
    'aliases' => 
    array (
      '@martinsmith/entrylevel' => $vendorDir . '/martinsmith/craft-entry-level/src',
    ),
    'name' => 'Entry Level',
    'version' => '1.1.0',
    'description' => 'Auto-parent entries in Structure sections based on Entry Type',
    'developer' => 'Martin Smith',
    'developerUrl' => 'https://github.com/martinsmith',
    'developerEmail' => 'info@martinsmith.media',
    'documentationUrl' => 'https://github.com/martinsmith/craft-entry-level#readme',
    'changelogUrl' => 'https://raw.githubusercontent.com/martinsmith/craft-entry-level/main/CHANGELOG.md',
    'hasCpSettings' => true,
  ),
  'miranj/craft-obfuscator' => 
  array (
    'class' => 'miranj\\obfuscator\\Obfuscator',
    'basePath' => $vendorDir . '/miranj/craft-obfuscator/src',
    'handle' => 'obfuscator',
    'aliases' => 
    array (
      '@miranj/obfuscator' => $vendorDir . '/miranj/craft-obfuscator/src',
    ),
    'name' => 'Obfuscator',
    'version' => '1.2.0',
    'description' => 'Adds a Twig filter to obfuscate emails using Hivelogic Enkoder.',
    'developer' => 'Miranj',
    'developerUrl' => 'https://miranj.in',
    'documentationUrl' => 'https://github.com/miranj/craft-obfuscator/blob/v1/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/miranj/craft-obfuscator/v1/CHANGELOG.md',
  ),
);
