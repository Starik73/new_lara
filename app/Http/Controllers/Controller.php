<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public string $lang_code = 'en';

    public function __construct(Request $request)
    {
        if (in_array($request->sl, ['en', 'ru'])) {
            $this->lang_code = $request->sl;
        }
        defined('LANG_CODE') or define('LANG_CODE', $this->lang_code);
    }
}
