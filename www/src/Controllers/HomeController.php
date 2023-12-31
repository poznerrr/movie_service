<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home');
    }
}
