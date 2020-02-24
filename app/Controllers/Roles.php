<?php
namespace BRM\Roles\app\Controllers;

use Illuminate\Routing\Controller;
use BRM\Vivid\app\Traits\Control;

class Roles extends Controller
{
    use Control;

    public function __construct()
    {
        $this->service = \BRM\Roles\app\Services\Roles::class;
    }
}
