<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = [
            (object)[
                'title' => 'Shopify Website 1',
                'description' => 'A custom Shopify store.',
                'url' => 'https://example-shopify-store.com',
            ],
            (object)[
                'title' => 'Shopify Website 2',
                'description' => 'Another Shopify store with advanced features.',
                'url' => 'https://example-shopify-store-2.com',
            ],
        ];

        return view('projects', compact('projects'));
    }

}

