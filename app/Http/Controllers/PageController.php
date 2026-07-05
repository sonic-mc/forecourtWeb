<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'services' => config('forecourt.services'),
            'projects' => config('forecourt.projects'),
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services', [
            'services' => config('forecourt.services'),
        ]);
    }

    public function serviceDetails(string $slug)
    {
        $services = config('forecourt.services');

        $service = Arr::first($services, fn ($item) => $item['slug'] === $slug);

        abort_if($service === null, 404);

        $otherServices = array_values(array_filter($services, fn ($item) => $item['slug'] !== $slug));

        return view('pages.service-details', [
            'service' => $service,
            'otherServices' => $otherServices,
        ]);
    }

    public function projects()
    {
        return view('pages.projects', [
            'projects' => config('forecourt.projects'),
        ]);
    }

    public function faq()
    {
        return view('pages.faq', [
            'faqs' => config('forecourt.faqs'),
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function store()
    {
        return view('pages.store', [
            'products' => config('forecourt.products'),
            'categories' => config('forecourt.product_categories'),
        ]);
    }
}
