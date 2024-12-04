<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;

class GitHubController extends Controller
{
    public function index()
    {
        try {
            $client = new \GuzzleHttp\Client();

            $response = $client->get('https://api.github.com/user/repos', [
                'headers' => [
                    'Authorization' => 'token ' . env('GITHUB_TOKEN'),
                ],
            ]);

            $repos = json_decode($response->getBody());

            return view('github', compact('repos'));
        } catch (RequestException $e) {
            \Log::error('GitHub API Request failed: ' . $e->getMessage());

            return view('github')->with('error', 'Unable to fetch repositories. Please try again later.');
        } catch (\Exception $e) {
            \Log::error('An unexpected error occurred: ' . $e->getMessage());

            return view('github')->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
