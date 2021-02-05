<?php

namespace App\Controllers;

class View extends BaseController
{
    public function index()
    {
        $data = [
            "script" => "view",
            "title" => "View"
        ];
        return view('pages/view', $data);
    }

    public function search($slug)
    {
        $res = $this->restaurantModel->getRes($slug);
        dd($res);
    }
}