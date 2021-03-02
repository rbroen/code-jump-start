<?php

declare(strict_types=1);

use Laminas\ConfigAggregator\ConfigAggregator;

/**
 * This file will be populated by the mezzio cli tool, but it is likely you will want to move the configuration to
 * the appropriate files in your project.
 */

return [
    // Development mode will always prevent this setting from enabling caching.
    ConfigAggregator::ENABLE_CACHE => true,

    // Enable debugging
    'debug' => false,

    'mezzio' => [
        // Provide templates for the error handling middleware to use when generating responses.
        'error_handler' => [
            'template_404'   => 'error::404',
            'template_error' => 'error::error',
        ],
    ],
];
