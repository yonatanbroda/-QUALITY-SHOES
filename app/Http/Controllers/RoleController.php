<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('onlyAdmi');
    }
    
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos = Permission::all();
        return view('roles.create', compact('permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles'
        ]);
        $rol = new Role();
        $rol->name = $request->name;
        $rol->save();
        $rol->syncPermissions($request->permisos);
        
        //bitacora
        activity()->useLog('gestionar roles')->log('Registro')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $rol->id;
        $lastActivity->save();
        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permisos = Permission::all();
        $permisoArray = array();

        foreach ($permisos as $permiso) {
            $p = json_decode($permiso, true);
            array_push($permisoArray, $p['name']);
        }

        $per = $role->getPermissionNames();
        $perA = json_decode($per, true);
        //bitacora
        activity()->useLog('gestionar roles')->log('Edito')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $role->id;
        $lastActivity->save();
        return view('roles.edit', compact('role', 'permisos', 'permisoArray', 'per', 'perA'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request, [
            'name' => "required|unique:roles,name,$role->id",
            'name' => "required|unique:roles,guard_name,$role->id",
        ]);
        $role = Role::findOrFail($role->id);
        $role->name = $request->name;
        $role->syncPermissions($request->permisos);

        $role->save();
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        Role::destroy($role->id);
        //bitacora
        activity()->useLog('gestionar roles')->log('Elimino')->subject();
        $lastActivity = Activity::all()->last();
        $lastActivity->subject_id = $role->id;
        $lastActivity->save();
        return redirect('roles');
    }
}
