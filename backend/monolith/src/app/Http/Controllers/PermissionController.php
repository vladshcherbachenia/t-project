<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Http\Resources\PermissionResource;

class PermissionController extends Controller
{
    public function index() {
        return PermissionResource::collection(Permission::all());
    }
}
