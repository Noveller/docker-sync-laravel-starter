<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\TestModel;

class TestController extends Controller
{
    public function test() {
        $model = new TestModel();

        echo '<pre>';
        var_dump($model->test());
        echo '</pre>';

        die();
    }
}
