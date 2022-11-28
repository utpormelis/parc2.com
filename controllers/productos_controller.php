<?php
require_once("models/productos.php");
require_once("utils/seg.php");
class productos_controller
{

    public static function inicio(){
        $titulo = "Tabla de Artículos";
          require_once("views/template/header.php"); 
          require_once("views/template/navbar.php");
          require_once("views/productos/mostrar_productos.php");
          require_once("views/template/footer.php");
     } 

    public static function buscar_productos()
    {
        $titulo = "Tabla de Artículos";
        if(isset($_SESSION["usuario"])){

            if(!isset($_POST["token"]) || !seg::validasession($_POST["token"])){
                echo "acceso restringido";
                exit();
            }

           $id = filter_var($_POST["id_producto"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
           $obj = new productos($id,"","","","","");
           $resultado = $obj->valida_producto();
           
           if(count($resultado)>0){
           $titulo = "Descripción de Artículos";
          require_once("views/template/header.php"); 
          require_once("views/template/navbar.php");
          require_once("views/productos/buscar_producto.php");
          require_once("views/template/footer.php");
           }
           else{
              header("location: index.php?c=".seg::codificar("productos")."&m=".seg::codificar("inicio"));
           }
        }
    }

    public static function mostrar_productos()
    {
        if(isset($_SESSION["usuario"])){
            
            $producto[] = new productos(1,"Hamburguesa Vegetariana","6.70 $","11.50 $","8px en inventario","../imag/photo1.jpg");
            $producto[] = new productos(2,"Hamburguesa al Carbon Clasica","4.00 $","10.00 $","12px en inventario","../imag/photo2.jpg");
            $producto[] = new productos(3,"Hamburguesa con pollo frito","5.50 $","12.00 $","4px en inventario","../imag/photo3.jpg");
            $producto[] = new productos(4,"Hamburguesa de Queso","7.75 $","17.00 $","22px en inventario","../imag/photo4.jpg");
            $producto[] = new productos(5,"Hamburguesa Suprema","7.00 $","15.00 $","16px en inventario","../imag/photo5.jpg");
            $producto[] = new productos(6,"Hamburguesa BBQ","9.00 $","18.00 $","10px en inventario","../imag/photo6.jpg");
            return $producto;
        }
    }
}
