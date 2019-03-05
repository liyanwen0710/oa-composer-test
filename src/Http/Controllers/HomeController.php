<?php

namespace Finlab\Packages\Http\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{

    /**
     * The response factory implementation.
     *
     * @var \Illuminate\Contracts\Routing\ResponseFactory
     */
    protected $response;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Routing\ResponseFactory $response
     *
     * @return void
     */
    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->response->view('oa-composer-test::home');
    }

}
