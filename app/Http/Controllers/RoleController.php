<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RoleController extends Controller
{
    /**
     * Display a listing of roles.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        // Stubbed response for now
        return response()->json([
            'roles' => [
                ['id' => 1, 'name' => 'Super Admin'],
                ['id' => 2, 'name' => 'Admin'],
                ['id' => 3, 'name' => 'Support Staff'],
                ['id' => 4, 'name' => 'Customer Admin'],
                ['id' => 5, 'name' => 'Customer User'],
            ]
        ]);
    }
}
