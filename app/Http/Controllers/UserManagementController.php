<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YaroslavMolchan\Rbac\Models\Role;

class UserManagementController extends Controller
{
    public function addNewRole(Request $request){
        $userRole = Role::create([
            'name' => $request['role_name'],
            'slug' => strtolower($request['role_name'])
        ]);
        return $userRole;
    }

    public function getUserRoles(){
        $data = Role::all();
        return $data;
    }
}
