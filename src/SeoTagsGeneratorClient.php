<?php

declare(strict_types=1);

namespace SharpAPI\SEOTags;

use GuzzleHttp\Exception\GuzzleException;
use SharpAPI\Core\Client\SharpApiClient;

/**
 * Generate SEO and social media tags using AI - META tags for websites
 *
 * @package SharpAPI\SEOTags
 * @api
 */
class SeoTagsGeneratorClient extends SharpApiClient
{
    public function __construct(
        string $apiKey,
        ?string $apiBaseUrl = 'https://sharpapi.com/api/v1',
        ?string $userAgent = 'SharpAPIPHPSEOTags/1.0.0'
    ) {
        parent::__construct($apiKey, $apiBaseUrl, $userAgent);
    }

    /**
     * Generate SEO and social media tags using AI - META tags for websites
     *
     * @param string $content The content to generate SEO tags for
     * @param string $language Output language (default: English)
     * @param string|null $voiceTone Optional tone of voice
     * @return string Status URL for polling the job result
     * @throws GuzzleException
     * @api
     */
    public function generateSeoTags(
        string $content,
        string $language = 'English',
        ?string $voiceTone = null
    ): string {
        $response = $this->makeRequest('POST', '/seo/generate_tags', array_filter([
            'content' => $content,
            'language' => $language,
            'voice_tone' => $voiceTone,
        ], fn($v) => $v !== null));

        return $this->parseStatusUrl($response);
    }
}
