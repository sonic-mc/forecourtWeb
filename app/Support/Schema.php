<?php

namespace App\Support;

/**
 * Builds schema.org JSON-LD structured data for search engine rich results.
 * Render one or more schemas into a <script> tag with Schema::script(...).
 */
class Schema
{
    public static function script(array ...$schemas): string
    {
        $payload = count($schemas) === 1
            ? $schemas[0]
            : ['@context' => 'https://schema.org', '@graph' => array_map(
                fn ($schema) => collect($schema)->except('@context')->all(),
                $schemas
            )];

        return '<script type="application/ld+json">'
            . json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
            . '</script>';
    }

    public static function organization(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            '@id' => config('site.url') . '/#organization',
            'name' => config('site.name'),
            'url' => config('site.url'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => url('logo.png'),
            ],
            'email' => config('site.email_primary'),
            'telephone' => config('site.phone_primary_href'),
            'sameAs' => array_values(array_filter([
                config('site.facebook'),
                config('site.twitter'),
                config('site.instagram'),
                config('site.linkedin'),
            ], fn ($url) => $url && $url !== '#')),
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => config('site.phone_primary_href'),
                'contactType' => 'customer service',
                'areaServed' => 'ZW',
                'availableLanguage' => 'English',
            ],
        ];
    }

    public static function localBusiness(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => config('seo.business.type'),
            '@id' => config('site.url') . '/#localbusiness',
            'name' => config('site.name'),
            'description' => config('seo.default_description'),
            'url' => config('site.url'),
            'image' => url(config('seo.default_image')),
            'telephone' => config('site.phone_primary_href'),
            'email' => config('site.email_primary'),
            'priceRange' => config('seo.business.price_range'),
            'foundingDate' => config('seo.business.founding_year'),
            'areaServed' => [
                '@type' => 'Country',
                'name' => config('seo.business.area_served'),
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => config('site.address_line1'),
                'addressLocality' => 'Harare',
                'addressRegion' => 'Harare Province',
                'addressCountry' => 'ZW',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => config('seo.geo.latitude'),
                'longitude' => config('seo.geo.longitude'),
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '08:00',
                'closes' => '17:00',
            ],
            'parentOrganization' => ['@id' => config('site.url') . '/#organization'],
        ];
    }

    public static function website(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            '@id' => config('site.url') . '/#website',
            'name' => config('site.name'),
            'url' => config('site.url'),
            'publisher' => ['@id' => config('site.url') . '/#organization'],
            'inLanguage' => 'en',
        ];
    }

    /**
     * @param  array<string, string|null>  $items  label => absolute url (null for current page)
     */
    public static function breadcrumbs(array $items): array
    {
        $position = 0;

        return [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => collect($items)->map(function ($url, $label) use (&$position) {
                $position++;

                return array_filter([
                    '@type' => 'ListItem',
                    'position' => $position,
                    'name' => $label,
                    'item' => $url,
                ]);
            })->values()->all(),
        ];
    }

    public static function service(array $service): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $service['title'],
            'description' => $service['excerpt'],
            'url' => route('services.show', $service['slug']),
            'image' => url($service['image']),
            'serviceType' => $service['title'],
            'provider' => ['@id' => config('site.url') . '/#localbusiness'],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'Zimbabwe',
            ],
        ];
    }

    public static function serviceList(array $services): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'name' => 'Fuel Handling Services',
            'itemListElement' => collect($services)->map(fn ($service, $index) => [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $service['title'],
                'url' => route('services.show', $service['slug']),
            ])->values()->all(),
        ];
    }

    public static function faqPage(array $faqs): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => collect($faqs)->map(fn ($faq) => [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'],
                ],
            ])->values()->all(),
        ];
    }

    public static function productList(array $products): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'name' => 'Fuel Handling Equipment Store',
            'itemListElement' => collect($products)->map(fn ($product, $index) => [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'item' => [
                    '@type' => 'Product',
                    'name' => $product['name'],
                    'description' => $product['description'],
                    'image' => url($product['image']),
                    'category' => $product['tag'],
                    'brand' => [
                        '@type' => 'Brand',
                        'name' => str_starts_with($product['name'], 'PIUSI') ? 'PIUSI' : config('site.name'),
                    ],
                ],
            ])->values()->all(),
        ];
    }
}
