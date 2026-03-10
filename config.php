<?php
// ─────────────────────────────────────────────
//  AssetIQ — Database Configuration
//  Edit these values to match your Cloudways
//  MySQL credentials (found in your Cloudways
//  Application > Database panel)
// ─────────────────────────────────────────────

define('DB_HOST', 'localhost');
define('DB_NAME', 'awhfqygezp');   // e.g. assetiq
define('DB_USER', 'awhfqygezp');   // Cloudways DB username
define('DB_PASS', '8A99AtYQkn');
define('DB_PORT', 3306);

// ─────────────────────────────────────────────
//  App settings
// ─────────────────────────────────────────────
define('APP_NAME', 'AssetIQ');
define('APP_VERSION', '1.0.0');
define('APP_URL',     'https://phpstack-1280766-6240330.cloudwaysapps.com'); // no trailing slash

// ─────────────────────────────────────────────
//  Microsoft Intune / Graph API credentials
//  Get these from Azure Portal → Entra ID →
//  App registrations → your app
// ─────────────────────────────────────────────
define('INTUNE_TENANT_ID',     '48c8e0ae-034e-4153-99dd-ef09c2dd2d64');      // Directory (tenant) ID
define('INTUNE_CLIENT_ID',     '64a0cef9-b8ac-424b-8f93-2ee88bacf98d');      // Application (client) ID
define('INTUNE_CLIENT_SECRET', 'y7n8Q~2XEfaZrvI.vnuOABQcI5UA6bFVAqfapcL_');  // Client secret value

// Anthropic API — console.anthropic.com/api-keys
define('ANTHROPIC_API_KEY', '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');
