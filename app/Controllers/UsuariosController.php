<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;


class UsuariosController extends BaseController
{

    public function documentacion(){
        return view('API_DOC');
    }

    //| FUNCION QUE RETORNA TODOS LOS REGISTROS DE LA TABLA USUARIOS
    public function index()
    {
        // busca todos los usuarios del modelo UsuariosModel
        $usuarios = model('UsuariosModel')->findAll();

        //da un estaus a la respuesta
        $this->response->setStatusCode(200, 'OK');

        // cuerpo de la respuesta
        return $this->response->setJSON(
            [
                'message' => 'busqueda existosa',
                'data' => $usuarios
            ]
        );
    }


    // | FUNCION QUE BUSCA UN USUARIO POR SU ID Y LO RETORNA EN CASO DE ENCONTRARLO
    public function searchById($id)
    {
        // busca el usuario por id
        $usuario = model('UsuariosModel')->find($id);

        // si no existe el usuario
        if (!$usuario) {
            //da un estaus a la respuesta
            $this->response->setStatusCode(404, 'Not found');

            // cuerpo de la respuesta
            return $this->response->setJSON(
                [
                    'message' => 'No se ha encontrado el usuario con id ' . $id,
                ]
            );
        }

        //da un estatus a la respuesta
        $this->response->setStatusCode(200, 'OK');

        // cuerpo de la respuesta
        return $this->response->setJSON(
            [
                'message' => 'busqueda existosa',
                'data' => $usuario
            ]
        );
    }

    // | FUNCION QUE BUSCA UN O VARIOS USUARIO POR SU CODIGO POSTAL
    public function getUsuariosByPostalCode($cod_postal)
    {
        // busca el usuario por codigo postal
        $usuarios = model('UsuariosModel')->where('cod_postal', $cod_postal)->findAll();

        // si no existen usuarios con ese codigo postal
        if (!$usuarios) {
            //da un estaus a la respuesta
            $this->response->setStatusCode(404, 'Not found');

            // cuerpo de la respuesta
            return $this->response->setJSON(
                [
                    'message' => 'No se han encontrado usuarios con el codigo postal',
                ]
            );
        }

        //da un estatus a la respuesta
        $this->response->setStatusCode(200, 'OK');

        // cuerpo de la respuesta
        return $this->response->setJSON(
            [
                'message' => 'busqueda existosa',
                'data' => $usuarios[0]
            ]
        );
    }

    // | FUNCION QUE BUSCA USUARIOS POR SU NUMERO EXTERIOR
    public function getUsuariosByExteriorNum($exterior)
    {
        // busca el usuario por su numero exterior
        $usuarios = model('UsuariosModel')->where('num_exterior', $exterior)->findAll();

        // si no existen usuarios con ese numero exterior
        if (!$usuarios) {
            //da un estaus a la respuesta
            $this->response->setStatusCode(404, 'Not found');

            // cuerpo de la respuesta
            return $this->response->setJSON(
                [
                    'message' => 'No se han encontrado usuarios con el codigo postal',
                ]
            );
        }

        //da un estatus a la respuesta
        $this->response->setStatusCode(200, 'OK');

        // cuerpo de la respuesta
        return $this->response->setJSON(
            [
                'message' => 'busqueda existosa',
                'data' => $usuarios
            ]
        );
    }

    // | FUNCION QUE OBTIENE EL NOMBRE COMPLETO DE UN USUARIO QUE CONTENGA X LETRA EN SU NOMBRE
    public function getUsuariosNameLetter($letter)
    {
        // busca el usuario por coincidencia de letra
        $usuarios = model('UsuariosModel')->like('nombre', $letter, 'both')->select(['nombre', 'ap_paterno', 'ap_materno'])->findAll();


        // si no existen usuarios con ese codigo postal
        if (!$usuarios) {
            //da un estaus a la respuesta
            $this->response->setStatusCode(404, 'Not found');

            // cuerpo de la respuesta
            return $this->response->setJSON(
                [
                    'message' => 'No se han encontrado usuarios con el codigo postal',
                ]
            );
        }

        //da un estatus a la respuesta
        $this->response->setStatusCode(200, 'OK');

        // cuerpo de la respuesta
        return $this->response->setJSON(
            [
                'message' => 'busqueda existosa',
                'data' => $usuarios
            ]
        );
    }

    // | FUNCION QUE OBTIENE TODOS LOS NOMBRES DE LOS USUARIOS
    public function getNames()
    {
        // busca todos los usuarios
        $usuarios = model('UsuariosModel')->select(['nombre', 'ap_paterno', 'ap_materno'])->findAll();


        // si no existen usuarios con ese codigo postal
        if (!$usuarios) {
            //da un estaus a la respuesta
            $this->response->setStatusCode(404, 'Not found');

            // cuerpo de la respuesta
            return $this->response->setJSON(
                [
                    'message' => 'No se han encontrado usuarios con el codigo postal',
                ]
            );
        }

        //da un estatus a la respuesta
        $this->response->setStatusCode(200, 'OK');

        // cuerpo de la respuesta
        return $this->response->setJSON(
            [
                'message' => 'busqueda existosa',
                'data' => $usuarios
            ]
        );
    }

    // | FUNCION QUE OBTIENE TODOS LOS NOMBRES DE LOS USUARIOS
    public function getEmails()
    {
        // busca todos los usuarios
        $usuarios = model('UsuariosModel')->select('correo')->findAll();


        // si no existen usuarios con ese codigo postal
        if (!$usuarios) {
            //da un estaus a la respuesta
            $this->response->setStatusCode(404, 'Not found');

            // cuerpo de la respuesta
            return $this->response->setJSON(
                [
                    'message' => 'No se han encontrado usuarios con el codigo postal',
                ]
            );
        }

        //da un estatus a la respuesta
        $this->response->setStatusCode(200, 'OK');

        // cuerpo de la respuesta
        return $this->response->setJSON(
            [
                'message' => 'busqueda existosa',
                'data' => $usuarios
            ]
        );
    }


}