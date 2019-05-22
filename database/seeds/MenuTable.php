<?php

use Illuminate\Database\Seeder;

class MenuTable extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$menus = [
          	['name'=> 'Perfiles de Acceso','icon'=> 'clip-key-2','link'=>'/types','prioridad'=> '5','status'=> 1,],
            ['name'=> 'Usuarios','icon'=> 'clip-users','link'=>'/users','prioridad'=> '6','status'=> 1,], 
            ['name'=> 'Categorias','icon'=> 'clip-list-6','link'=>'/categories','prioridad'=> '10','status'=> 1,],
            ['name'=> 'Proveedores','icon'=> 'clip-user-5','link'=>'/providers','prioridad'=> '7','status'=> 1,],
            ['name'=> 'Inventario','icon'=> 'clip-archive','link'=>'/inventory','prioridad'=> '10','status'=> 1,],
            ['name'=> 'Configuracion','icon'=> 'clip-cogs','link'=>'/configuration','prioridad'=> '1','status'=> 1,],
            
          ];
          
          foreach($menus as $menu){
    			DB::table('basic_menu')->insert($menu);
							}
     }
}//end class MeNUTable

