<?php
/**
 * SEOmatic plugin for Craft CMS configuration
 *
 * This file configures SEOmatic for Hair Haven
 * Based on CraftCMS v5.8.19 requirements
 */

use craft\helpers\App;

return [
    // The public-facing name of the plugin
    'pluginName' => 'SEOmatic',

    // Should SEOmatic render metadata?
    'renderEnabled' => true,

    // Should SEOmatic render frontend sitemaps?
    'sitemapsEnabled' => true,

    // Should sitemaps be submitted to search engines automatically whenever there are changes?
    'submitSitemaps' => true,

    // Should items where the entry URL doesn't match the canonical URL be excluded?
    'excludeNonCanonicalUrls' => false,

    // Should the homepage be included in the generated Breadcrumbs JSON-LD?
    'includeHomepageInBreadcrumbs' => true,

    // Should SEOmatic add to the http response headers?
    'headersEnabled' => true,

    // Whether the environment should be manually set, or automatically determined
    'manuallySetEnvironment' => false,

    // The server environment, either `live`, `staging`, or `local`
    'environment' => App::env('CRAFT_ENVIRONMENT') ?: 'local',

    // Should SEOmatic display the SEO Preview sidebar?
    'displayPreviewSidebar' => true,

    // Should SEOmatic add a Social Media Preview Target?
    'socialMediaPreviewTarget' => true,

    // The social media platforms that should be displayed in the SEO Preview sidebar
    'sidebarDisplayPreviewTypes' => [
        'google',
        'twitter',
        'facebook',
    ],

    // Should SEOmatic display the SEO Analysis sidebar?
    'displayAnalysisSidebar' => true,

    // If `devMode` is on, prefix the <title> with this string
    'devModeTitlePrefix' => '🚧 ',

    //  Prefix the Control Panel <title> with this string
    'cpTitlePrefix' => '⚙ ',

    // If `devMode` is on, prefix the Control Panel <title> with this string
    'devModeCpTitlePrefix' => '🚧⚙ ',

    // The separator character to use for the `<title>` tag
    'separatorChar' => '|',

    // The max number of characters in the `<title>` tag
    'maxTitleLength' => 70,

    // The max number of characters in the `<meta name="description">` tag
    'maxDescriptionLength' => 155,

    // Should Title tags be truncated at the max length, on word boundaries?
    'truncateTitleTags' => true,

    // Should Description tags be truncated at the max length, on word boundaries?
    'truncateDescriptionTags' => true,

    // Should SEOmatic add `hreflang` tags?
    'addHrefLang' => false,

    // Should SEOmatic add `x-default` hreflang tags?
    'addXDefaultHrefLang' => false,

    // Should SEOmatic add hreflang tags for paginated pages?
    'addPaginatedHreflang' => false,

    // Should SEOmatic lower case the hreflang tags?
    'lowercaseCanonicalUrl' => true,

    // Should SEOmatic include the `generator` tag?
    'generatorEnabled' => true,

    // The duration of the SEOmatic meta cache in seconds. Null means always cached until explicitly broken
    // If devMode is on, caches last 30 seconds.
    'metaCacheDuration' => null,

    // Should the meta cache be cleared when entries are saved?
    'clearCacheOnSave' => true,

    // Should SEOmatic add to the http response headers?
    'headersEnabled' => true,

    // The X-Robots-Tag header
    'xRobotsTag' => '',

    // The X-Robots-Tag header environment overrides
    'xRobotsTagContainer' => [
        'live' => '',
        'staging' => 'none',
        'local' => 'none',
    ],

    // Should SEOmatic render the humans.txt template?
    'renderHumansTxt' => true,

    // Should SEOmatic render the robots.txt template?
    'renderRobotsTxt' => true,

    // Should SEOmatic render the ads.txt template?
    'renderAdsTxt' => false,

    // Should SEOmatic render the security.txt template?
    'renderSecurityTxt' => false,

    // The duration of the SEOmatic sitemap cache in seconds. Null means always cached until explicitly broken
    // If devMode is on, caches last 30 seconds.
    'sitemapCacheDuration' => null,

    // Should the sitemap cache be cleared when entries are saved?
    'clearSitemapCacheOnSave' => true,

    // Should SEOmatic add to the http response headers?
    'headersEnabled' => true,

    // Should SEOmatic automatically create sitemaps for all sections?
    'automaticallyCreateSitemaps' => true,

    // Should SEOmatic automatically create meta bundles for all sections?
    'automaticallyCreateMetaBundles' => true,

    // Should SEOmatic automatically create meta bundles for all category groups?
    'automaticallyCreateCategoryMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all tag groups?
    'automaticallyCreateTagMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all user groups?
    'automaticallyCreateUserMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Commerce product types?
    'automaticallyCreateProductMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Commerce variant types?
    'automaticallyCreateVariantMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Commerce category groups?
    'automaticallyCreateCommerceCategoryMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Commerce brand groups?
    'automaticallyCreateCommerceBrandMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Solspace Calendar calendars?
    'automaticallyCreateCalendarMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Solspace Calendar events?
    'automaticallyCreateCalendarEventMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Digital Products product types?
    'automaticallyCreateDigitalProductsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Events events?
    'automaticallyCreateEventsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Entries sections?
    'automaticallyCreateEntriesMetaBundles' => true,

    // Should SEOmatic automatically create meta bundles for all Assets volumes?
    'automaticallyCreateAssetsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Global sets?
    'automaticallyCreateGlobalsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Users?
    'automaticallyCreateUsersMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Categories?
    'automaticallyCreateCategoriesMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Tags?
    'automaticallyCreateTagsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Products?
    'automaticallyCreateProductsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Variants?
    'automaticallyCreateVariantsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Commerce Categories?
    'automaticallyCreateCommerceCategoriesMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Commerce Brands?
    'automaticallyCreateCommerceBrandsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Solspace Calendar Calendars?
    'automaticallyCreateCalendarsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Solspace Calendar Events?
    'automaticallyCreateCalendarEventsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Digital Products?
    'automaticallyCreateDigitalProductsMetaBundles' => false,

    // Should SEOmatic automatically create meta bundles for all Events?
    'automaticallyCreateEventsMetaBundles' => false,

    // Environment-specific settings
    'live' => [
        'environment' => 'live',
        'renderEnabled' => true,
        'sitemapsEnabled' => true,
        'submitSitemaps' => true,
        'xRobotsTagContainer' => '',
    ],
    'staging' => [
        'environment' => 'staging',
        'renderEnabled' => true,
        'sitemapsEnabled' => false,
        'submitSitemaps' => false,
        'xRobotsTagContainer' => 'none',
    ],
    'local' => [
        'environment' => 'local',
        'renderEnabled' => true,
        'sitemapsEnabled' => false,
        'submitSitemaps' => false,
        'xRobotsTagContainer' => 'none',
    ],
];
