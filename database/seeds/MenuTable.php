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
          	['name'=> 'Perfiles de Acceso','icon'=> 'fa fa-users','link'=>'/types','prioridad'=> '5','status'=> 1,],
            ['name'=> 'Usuarios','icon'=> 'fa fa-user','link'=>'/users','prioridad'=> '6','status'=> 1,], 
            ['name'=> 'Categorias','icon'=> 'fa fa-sitemap','link'=>'/categories','prioridad'=> '10','status'=> 1,],
            ['name'=> 'Proveedores','icon'=> 'fa fa-building-o','link'=>'/providers','prioridad'=> '7','status'=> 1,],
            ['name'=> 'Inventario','icon'=> 'fa fa-list-alt','link'=>'/inventory','prioridad'=> '10','status'=> 1,],
            ['name'=> 'Configuracion','icon'=> 'fa fa-gears','link'=>'/configuration','prioridad'=> '1','status'=> 1,],
            
          ];
          
          foreach($menus as $menu){
    			DB::table('basic_menu')->insert($menu);
							}
     }
}//end class MeNUTable

