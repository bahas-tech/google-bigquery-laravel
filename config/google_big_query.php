<?php

return [
    'migrations' => 'google_big_query',
    'credentials' => env('GOOGLE_CLOUD_APPLICATION_CREDENTIALS'),
    'project_id' => env('GOOGLE_CLOUD_PROJECT_ID'),
    'database' => env('GOOGLE_CLOUD_DATASET', env('GOOGLE_BIG_QUERY_DATABASE', 'forge')),
];
