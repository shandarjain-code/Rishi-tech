<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Response;

class SeoController extends Controller
{
    public function robots(): Response
    {
        $base = rtrim((string) config('app.url'), '/');
        $lines = [
            'User-agent: *',
            'Allow: /',
            '',
            'Sitemap: '.$base.'/sitemap.xml',
            '',
        ];

        return response(implode("\n", $lines), 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }

    public function sitemap(): Response
    {
        $base = rtrim((string) config('app.url'), '/');
        $urls = [
            ['loc' => $base.'/', 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => $base.'/portfolio', 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => $base.'/services', 'changefreq' => 'monthly', 'priority' => '0.85'],
            ['loc' => $base.'/contact', 'changefreq' => 'monthly', 'priority' => '0.85'],
            ['loc' => $base.'/start-project', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ];

        foreach (Project::query()->orderBy('sort_order')->pluck('id') as $id) {
            $urls[] = [
                'loc' => $base.'/portfolio/'.$id,
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ];
        }

        $xml = view('seo.sitemap', ['urls' => $urls])->render();

        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }
}
