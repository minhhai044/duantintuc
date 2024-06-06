<?php

namespace Minhhai\Duan\Controllers\Admin;

use Minhhai\Duan\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
