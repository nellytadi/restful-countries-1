<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function roles(){
        $roles = Role::all();
        return view("admin.roles",compact("roles"));
    }

    public function createRole(Request $request){
         $this->validate($request,[
             "role" => "required|unique:roles",
             "permissions" => "required"
         ]);

        $role_name=$request->input('role');
        $permissions=$request->input('permissions');

        $create_role = Role::create([
            "role" => $role_name
        ]);

        foreach ($permissions as $permission){
             Permission::create([
                 "role_id" => $create_role->id,
                 "permission" => $permission
             ]);
        }

        return redirect()->back()->with("success","Role created successfully");
    }

    public function editRole($id){
        $role  = Role::whereId($id)->first();

        return view("admin.edit-role",compact("role"));
    }

    public function updateRole($id,Request $request){
        $this->validate($request,[
            "role" => "required",
            "permissions" => "required"
        ]);

        $role_name=$request->input('role');
        $permissions=$request->input('permissions');

        $update_role = Role::findOrFail($id)->update([
            "role" => $role_name
        ]);

        //Delete old permissions
        $old_permissions = Permission::whereRoleId($id)->delete();


        //Insert new permissions
        foreach ($permissions as $permission){
            Permission::create([
                "role_id" => $id,
                "permission" => $permission
            ]);
        }

        return redirect()->back()->with("success","Role updated successfully");
    }
}
