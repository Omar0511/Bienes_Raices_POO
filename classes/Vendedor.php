<?php
    namespace App;

    class Vendedor extends ActiveRecord {
        protected static $tabla = 'vendedores';

        protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];

        public $id;
        public $nombre;
        public $apellido;
        public $telefono;

                //Creamos un arreglo donde almacenaremos los atributos
        public function __construct($args = [])
        {
            // ??: indica que en caso que no este presente titulo, va ser un STRING vacío
            $this->id = $args['id'] ?? null;
            $this->nombre = $args['nombre'] ?? '';
            $this->apellido = $args['apellido'] ?? '';
            $this->telefono = $args['telefono'] ?? '';
        }

        public function validar()
        {
            if (!$this->nombre) {
                self::$errores[] = "Debes añadir nombre";
            }

            if (!$this->apellido) {
                self::$errores[] = "Debes añadir apellido";
            }

            if (!$this->telefono) {
                self::$errores[] = "Debes añadir teléfono";
            }

            //Para expresion regular, expresion, a que validará
            if (!preg_match('/[0-9]{10}/', $this->telefono)) {
                self::$errores[] = "Formato de teléfono no válido";
            }

            return self::$errores;
        }
    }