<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tes;

class tesC extends Controller
{
    protected $model;
    public function __construct()
    {
        $this->model = new tes();
    }
    
    public function tes()
    {
        echo "kkk";
        // $this->model->query()->where('email');
    }
}
