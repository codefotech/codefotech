<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Instructor\Models\Instructor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FrontendController extends Controller
{
    public function home()
    {
        try {
            return view('frontend.layouts.main');
        } catch (Exception $e) {
            Log::error("Error occurred in FrontendController@frontend ({$e->getFile()}:{$e->getLine()}): {$e->getMessage()}");
            return view('frontend.layouts.main', ['error' => 'Unable to retrieve frontend data.']);
        }
    }

    public function about()
    {
        try {
            return view('frontend.layouts.about');
        } catch (Exception $e) {
            Log::error("Error occurred in FrontendController@about ({$e->getFile()}:{$e->getLine()}): {$e->getMessage()}");
            return view('frontend.layouts.about', ['error' => 'Unable to retrieve frontend data.']);
        }
    }

    public function blog()
    {
        try {
            return view('frontend.layouts.blog');
        } catch (Exception $e) {
            Log::error("Error occurred in FrontendController@blog ({$e->getFile()}:{$e->getLine()}): {$e->getMessage()}");
            return view('frontend.layouts.blog', ['error' => 'Unable to retrieve frontend data.']);
        }
    }

    public function blog_details()
    {
        try {
            return view('frontend.layouts.blog_details');
        } catch (Exception $e) {
            Log::error("Error occurred in FrontendController@blog_details ({$e->getFile()}:{$e->getLine()}): {$e->getMessage()}");
            return view('frontend.layouts.blog_details', ['error' => 'Unable to retrieve frontend data.']);
        }
    }

    public function service()
    {
        try {
            return view('frontend.layouts.service');
        } catch (Exception $e) {
            Log::error("Error occurred in FrontendController@service ({$e->getFile()}:{$e->getLine()}): {$e->getMessage()}");
            return view('frontend.layouts.service', ['error' => 'Unable to retrieve frontend data.']);
        }
    }

    public function product()
    {
        try {
            return view('frontend.layouts.product');
        } catch (Exception $e) {
            Log::error("Error occurred in FrontendController@product ({$e->getFile()}:{$e->getLine()}): {$e->getMessage()}");
            return view('frontend.layouts.product', ['error' => 'Unable to retrieve frontend data.']);
        }
    }
}
