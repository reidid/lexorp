<?php
	class RolesSeeder extends Seeder {
 
    public function run()
    {

        $Sistema = Role::create(array(
                'name' => 'Sistema',
                'sys' => true
        ));
        $Administrador = Role::create(array(
                'name' => 'Administrador',
                'sys' => true 
        ));
        $Usuario = Role::create(array(
                'name' => 'Usuario',
                'sys' => true
        ));
        
        $permisos = Permission::all();
        
        foreach($permisos as $permiso){
           $Sistema->attachPermission($permiso); 
           $Administrador->attachPermission($permiso); 
        }
    }
 
}