<?php
	class LibrosSeeder extends Seeder {
 
    public function run()
    {    
         
        $autor1 = Autor::create(array(
            'nombres' => 'Garcia',
            'apellidos' => 'Marquez'
        ));

        $autor2 = Autor::create(array(
            'nombres' => 'Thomas',
            'apellidos' => 'Piketty'
        ));


       DB::table('autores')->insert(array(
            array('nombres' => 'Spiegel','apellidos' => 'Murray R'),
            array('nombres' => 'Carl Barnett','apellidos' => 'Allendoerfer'),
            array('nombres' => 'Fabio','apellidos' => 'Hernández Díaz'),
            array('nombres' => 'Harald','apellidos' => 'Isenstein'),
            array('nombres' => 'Inés','apellidos' => 'Beyer'),
            array('nombres' => 'Roy','apellidos' => 'Richards'),
            array('nombres' => 'Lucia','apellidos' => 'Milande'),
            array('nombres' => 'Jean','apellidos' => 'Cocteau'
            )
        ));

        DB::table('editoriales')->insert(array(
            array('nombre' => 'ABC DIDACTICA'),
            array('nombre' => 'ACTIVIDAD GLOBAL'),
            array('nombre' => 'THORS LTDA'),
            array('nombre' => 'CATORSE S.C.S'),
            array('nombre' => 'DISTRIPESS LTDA '),
            array('nombre' => 'EDITORIAL OVEJA NEGRA')
        ));


        
         $Libro1 = Libro::create(array(
                 'titulo' => 'Proyectos agiles con Scrum',
                 'subtitulo' => 'Un reto organizacional',
                 'titulooriginal' => 'Scrum agile',
                 'anoedicion' => '2010',
                 'edicion' => '1',
                 'isbn' => '9789874515803',
                 'coleccion' => '1',
                 'editorial_id' => '1'

         ));
      
        $Libro1->autores()->attach('2');


        $Libro2 = Libro::create(array(
                 'titulo' => 'El capital en el siglo XXI',
                 'subtitulo' => 'capital',
                 'titulooriginal' => 'Capital',
                 'anoedicion' => '2010',
                 'edicion' => '1',
                 'isbn' => '16683',
                 'coleccion' => '1',
                 'editorial_id' => '1'
        ));

        $Libro2->autores()->attach('2');
           
        //  $Libro3 = Libro::create(array(
        //         'nombre' => 'The Baffler No. 25',
        //         'autor_id' => $autor2->id,
        //         'editorial_id' => '1',
        //         'ubicacion_id' => '1',
        // ));
        
        // $Libro4 = Libro::create(array(
        //         'nombre' => 'Top Incomes: A Global Perspective',
        //         'autor_id' => $autor2->id,
        //         'editorial_id' => '1',
        //         'ubicacion_id' => '1',
        // ));
        
        // $Libro5 = Libro::create(array(
        //         'nombre' => 'Top Incomes Over the Twentieth Century',
        //         'autor_id' => $autor2->id,
        //         'editorial_id' => '1',
        //         'ubicacion_id' => '1',
        // ));
        
    }
 
}