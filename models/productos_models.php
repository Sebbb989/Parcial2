<?php
class productos_models{
    private $id;
    private $produto;
    private $descripcion;
    private $precio;
    private $cantidad;

    public function __construct($id){

        $this->id = $id;


    }
    public function getId(){
        return $this->id;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getprecio(){
        return $this->precio;
    }

    public function getcantidad(){
        return $this->cantidad;
    }


    public static function Mostrar(){
        
        $productos[]=["id"=>"1","producto"=>"El padrino","descripcion"=>"Mafia","precio"=> 4,"cantidad"=>15];
        $productos[]=["id"=>"2","producto"=>"La liga de la justicia","descripcion"=>"SUper heroes","precio"=> 5,"cantidad"=>10];
        $productos[]=["id"=>"3","producto"=>"El Desquite","descripcion"=>"Romantico","precio"=> 6,"cantidad"=>2];
        $productos[]=["id"=>"4","producto"=>"El pistolero zurdo","descripcion"=>"Lejano oeste","precio"=> 20,"cantidad"=>25];
        $productos[]=["id"=>"5","producto"=>"El padrecito pelion","descripcion"=>"Un padrecito pelion","precio"=> 4,"cantidad"=>2];
        $productos[]=["id"=>"6","producto"=>"El Renacer","descripcion"=>"peli indu barata","precio"=> 2,"cantidad"=>3];
       
        
        return $productos;
        
    }
    
}
?>