<?php

namespace App\Http\Controllers\Setting;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserAccessController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
public function setup_permission(Request $request){
    $role = Role::create(['name' => $request->role_name,]);
    $permission = Permission::create(['name' => $request->permission_name]);
    $role->givePermissionTo($permission);
    $permission->assignRole($role);

}
public function users(){

}
    //
}
