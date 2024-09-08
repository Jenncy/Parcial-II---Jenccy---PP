<?php

namespace App\Controllers;
use App\Models\IntegrantesModel;

class IntegrantesController extends BaseController
{
    public function verIntegrantes(): string
    {
        $integrantes = new IntegrantesModel();
        $datos['datos']=$integrantes->findAll();
        return view('integrantes',$datos);
    }

    public function insertarIntegrante():string
    {
        return view('form_nuevo_integrante');
    }

    public function guardarIntegrante()
    {
        $integrantes = new IntegrantesModel();
        $datos = [
            'integrante_id' => $this->request->getPost('txtIntID'),
            'nombre' => $this->request->getPost('txtNombre'),    
            'apellido' => $this->request->getPost('txtApellido'),
            'fecha_nacimiento' => $this->request->getPost('txtFechaNac'),    
            'fecha_muerte' => $this->request->getPost('txtFechaMuerte'),
            'web_oficial' => $this->request->getPost('txtWeb'),
            'pais_nacimiento' => $this->request->getPost('txtPais')
        ];    
        print_r($datos);
        $integrantes->insert($datos);
        return redirect()->route('ver_integrantes');
    }

    public function eliminarIntegrante($cod=null)
    {
        $integrantes = New IntegrantesModel();
        $integrantes->delete(['integrante_id'=>$cod]);
        return $this -> verIntegrantes();
    }

    public function actualizarIntegrante($cod=null)
    {
        $integrantes = new IntegrantesModel();
        $datos['datos']=$integrantes->where(['integrante_id'=>$cod])->first();
        return view('form_actualizar_integrante',$datos);
    }

    public function modificarIntegrante()
    {
        $integrantes = new IntegrantesModel();
        $datos = [
            'integrante_id' => $this->request->getPost('txtIntID'),
            'nombre' => $this->request->getPost('txtNombre'),    
            'apellido' => $this->request->getPost('txtApellido'),
            'fecha_nacimiento' => $this->request->getPost('txtFechaNac'),    
            'fecha_muerte' => $this->request->getPost('txtFechaMuerte'),
            'web_oficial' => $this->request->getPost('txtWeb'),
            'pais_nacimiento' => $this->request->getPost('txtPais')
        ];    
        $integrantes->update($datos['integrante_id'],$datos);
        return $this->verIntegrantes();
    }
}


