<?php 
    //Se pone APP que fue el que se configuro en composer.json
    namespace App;

    class Propiedad extends ActiveRecord {
        protected static $tabla = 'propiedades';

        protected static $columnasDB = [
            'id', 
            'titulo', 
            'precio', 
            'imagen', 
            'descripcion', 
            'habitaciones', 
            'wc', 
            'estacionamiento', 
            'creado', 
            'vendedorId'
        ];

        //Son los atributos, es decir; los mismos que tenemos en la BD
        public $id;
        public $titulo;
        public $precio;
        public $imagen;
        public $descripcion;
        public $habitaciones;
        public $wc;
        public $estacionamiento;
        public $creado;
        public $vendedorId;
        
        //Creamos un arreglo donde almacenaremos los atributos
        public function __construct($args = [])
        {
            // ??: indica que en caso que no este presente titulo, va ser un STRING vacío
            $this->id = $args['id'] ?? null;
            $this->titulo = $args['titulo'] ?? '';
            $this->precio = $args['precio'] ?? '';
            $this->imagen = $args['imagen'] ?? '';
            $this->descripcion = $args['descripcion'] ?? '';
            $this->habitaciones = $args['habitaciones'] ?? '';
            $this->wc = $args['wc'] ?? '';
            $this->estacionamiento = $args['estacionamiento'] ?? '';
            $this->creado = date('Y/m/d');
            $this->vendedorId = $args['vendedorId'] ?? '';
        }

        public function validar() {            
            //Validador de errores
            if (!$this->titulo) {
                self::$errores[] = "Debes agregar un título";
            }

            if (!$this->precio) {
                self::$errores[] = "Debes agregar un precio";
            }

            if ( strlen($this->descripcion) < 30) {
                self::$errores[] = "Debes agregar una descripción miníma de 30 carácteres";
            }

            if (!$this->habitaciones) {
                self::$errores[] = "Debes agregar el número de habitaciones";
            }

            if (!$this->wc) {
                self::$errores[] = "Debes agregar el número de baños";
            }

            if (!$this->estacionamiento) {
                self::$errores[] = "Debes agregar el número de estacionamientos";
            }

            if (!$this->vendedorId) {
                self::$errores[] = "Debes seleccionar un vendedor";
            }

            if (!$this->imagen) {
                self::$errores[] = "La imágen es obligatoria";
            }

            return self::$errores;
        }
    }