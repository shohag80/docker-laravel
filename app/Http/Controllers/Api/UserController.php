<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user_service;

    public function __construct(UserService $userService)
    {
        $this->user_service = $userService;
    }

    public function index()
    {
        $data = $this->user_service->getAll();

        if (!empty($data)) {
            return $this->responseWithSuccess($data, 200);
        } else {
            return $this->responseWithError($data, 404);
        }
    }

    public function show($id)
    {
        $data = $this->user_service->getById($id);

        if (!empty($data)) {
            return $this->responseWithSuccess($data, 200);
        } else {
            return $this->responseWithError($data, 404);
        }
    }
}
