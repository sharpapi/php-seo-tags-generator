![SharpAPI GitHub cover](https://sharpapi.com/sharpapi-github-laravel-bg.jpg "SharpAPI PHP Client")

# Seo Tags Generator API for PHP

## 🔍 Generate SEO and social media tags using AI - META tags for websites

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharpapi/php-seo-tags-generator.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-seo-tags-generator)
[![Total Downloads](https://img.shields.io/packagist/dt/sharpapi/php-seo-tags-generator.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-seo-tags-generator)

Check the full documentation on the [Seo Tags Generator API for PHP API](https://sharpapi.com/en/catalog/ai/seo/seo-social-media-tags-generator) page.

---

## Quick Links

| Resource | Link |
|----------|------|
| **Main API Documentation** | [Authorization, Webhooks, Polling & More](https://documenter.getpostman.com/view/31106842/2s9Ye8faUp) |
| **Postman Documentation** | [View Docs](https://documenter.getpostman.com/view/31106842/2sBXVeGsaG) |
| **Product Details** | [SharpAPI.com](https://sharpapi.com/en/catalog/ai/seo/seo-social-media-tags-generator) |
| **SDK Libraries** | [GitHub - SharpAPI SDKs](https://github.com/sharpapi) |

---

## Requirements

- PHP >= 8.0

---

## Installation

### Step 1. Install the package via Composer:

```bash
composer require sharpapi/php-seo-tags-generator
```

### Step 2. Visit [SharpAPI](https://sharpapi.com/) to get your API key.

---
## Laravel Integration

Building a Laravel application? Check the Laravel package version for better integration.

---

## What it does

Generate SEO and social media tags using AI - META tags for websites

---

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use SharpAPI\SEOTags\SeoTagsGeneratorClient;
use GuzzleHttp\Exception\GuzzleException;

$apiKey = 'your_api_key_here';
$client = new SeoTagsGeneratorClient(apiKey: $apiKey);

try {
    $statusUrl = $client->generateSeoTags(
        content: 'Your text content here',
        language: 'English'
    );

    // Optional: Configure polling
    $client->setApiJobStatusPollingInterval(10);
    $client->setApiJobStatusPollingWait(180);

    // Fetch results (polls automatically)
    $result = $client->fetchResults($statusUrl);
    $resultData = $result->getResultJson();

    echo $resultData;
} catch (GuzzleException $e) {
    echo "API error: " . $e->getMessage();
}
```

---

## Example Response
```json

{
    "data": {
        "type": "api_job_result",
        "id": "397676a9-599b-4f6d-822a-d9d9f32b3890",
        "attributes": {
            "status": "success",
            "type": "seo_generate_tags",
            "result": {
                "meta_tags": {
                    "title": "Las Vegas Grand Prix: A Showstopper Event",
                    "author": "",
                    "og:url": "",
                    "og:type": "article",
                    "keywords": "Las Vegas Grand Prix, Max Verstappen, Formula 1, F1, Lewis Hamilton, Fernando Alonso",
                    "og:image": "",
                    "og:title": "Las Vegas Grand Prix: A Showstopper Event",
                    "description": "Max Verstappen and other F1 stars share their thoughts on the Las Vegas Grand Prix.",
                    "og:site_name": "",
                    "twitter:card": "summary",
                    "twitter:image": "",
                    "twitter:title": "Las Vegas Grand Prix: A Showstopper Event",
                    "og:description": "Max Verstappen and other F1 stars share their thoughts on the Las Vegas Grand Prix.",
                    "twitter:creator": "",
                    "twitter:description": "Max Verstappen and other F1 stars share their thoughts on the Las Vegas Grand Prix."
                }
            }
        }
    }
}

```
---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

---

## Credits

- [A2Z WEB LTD](https://github.com/a2zwebltd)
- [Dawid Makowski](https://github.com/makowskid)
- Boost your [PHP AI](https://sharpapi.com/) capabilities!

---

## License

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

## Social Media

🚀 For the latest news, tutorials, and case studies, don't forget to follow us on:
- [SharpAPI X (formerly Twitter)](https://x.com/SharpAPI)
- [SharpAPI YouTube](https://www.youtube.com/@SharpAPI)
- [SharpAPI Vimeo](https://vimeo.com/SharpAPI)
- [SharpAPI LinkedIn](https://www.linkedin.com/products/a2z-web-ltd-sharpapicom-automate-with-aipowered-api/)
- [SharpAPI Facebook](https://www.facebook.com/profile.php?id=61554115896974)
