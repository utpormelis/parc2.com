<?php
class productos
{
    private $id_producto;
    private $descripcion;
    private $costo_compra;
    private $precio_venta;
    private $cantidad_en_existencia;
    private $img;


    public function __construct($id_producto, $descripcion, $costo_compra, $precio_venta, $cantidad_en_existencia,$img)
    {
        $this->id_producto = $id_producto;
        $this->descripcion = $descripcion;
        $this->costo_compra = $costo_compra;
        $this->precio_venta = $precio_venta;
        $this->cantidad_en_existencia = $cantidad_en_existencia;
        $this->img=$img;
    }

        public function getid_producto(){
            return $this->id_producto;
        }

        public function getdescripcion(){
            return $this->descripcion;
        }

        public function getcosto_compra(){
            return $this->costo_compra;
        }

        public function getprecio_venta(){
            return $this->precio_venta;
        }

        public function getcantidad_en_existencia(){
            return $this->cantidad_en_existencia;
        }

        public function getimg(){
            return $this->img;
        }

    public function valida_producto()
    {
        $tablap[]=["id_producto"=>"1","descripcion"=>"Hamburguesa Vegetariana","costo_compra"=>"6.70","precio_venta"=>"11.50","cantidad_en_existencia"=>"8","img"=>"../imag/photo1.jpg"];
        $tablap[]=["id_producto"=>"2","descripcion"=>"Hamburguesa al carbon clasica","costo_compra"=>"4","precio_venta"=>"10","cantidad_en_existencia"=>"12","img"=>"../imag/photo2.jpg"];
        $tablap[]=["id_producto"=>"3","descripcion"=>"Hamburguesa con pollo frito","costo_compra"=>"5.50","precio_venta"=>"12","cantidad_en_existencia"=>"4","img"=>"../imag/photo3.jpg"];
        $tablap[]=["id_producto"=>"4","descripcion"=>"Hamburguesa de Queso","costo_compra"=>"7.75","precio_venta"=>"17","cantidad_en_existencia"=>"22","img"=>"../imag/photo4.jpg"];
        $tablap[]=["id_producto"=>"5","descripcion"=>"Hamburguesa Suprema","costo_compra"=>"7","precio_venta"=>"15","cantidad_en_existencia"=>"16","img"=>"../imag/photo5.jpg"];
        $tablap[]=["id_producto"=>"6","descripcion"=>"Hamburguesa BBQ","costo_compra"=>"9","precio_venta"=>"18","cantidad_en_existencia"=>"10","img"=>"../imag/photo6.jpg"];

        foreach($tablap as $tp)
        {
           if ($this->id_producto==$tp["id_producto"])
           return $tp;
        }
        return[];
    }

}
