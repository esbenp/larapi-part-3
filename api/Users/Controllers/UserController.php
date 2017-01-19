<?php

namespace Api\Users\Controllers;

use Illuminate\Http\Request;
use Infrastructure\Http\Controller;
use Api\Users\Exceptions\TestException;
use Api\Users\Requests\CreateUserRequest;
use Api\Users\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAll()
    {
        throw new \Exception('yolo');
    }

    public function getById($userId)
    {
        throw new TestException();
    }

    public function create(CreateUserRequest $request)
    {
        $data = $request->get('user', []);

        return $this->response($this->userService->create($data), 201);
    }

    public function update($userId, Request $request)
    {
        $data = $request->get('user', []);

        return $this->response($this->userService->update($userId, $data));
    }

    public function delete($userId)
    {
        return $this->response($this->userService->delete($userId));
    }
}
