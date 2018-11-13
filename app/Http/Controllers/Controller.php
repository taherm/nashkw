<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Services\Traits\ImageHelpers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    const PAGINATE = 100;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ImageHelpers;
}
