<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class ClimateController extends Controller
{

    public function index()
    {

        $chave = '59c367a0';
        $ip = $_SERVER["REMOTE_ADDR"];

        $dados = $this->hg_request(array(
            'city_name' => 'Passos'
        ), $chave);

        return view('admin.climate.index', compact('dados'));
    }

    public function hg_request($parametros, $chave = null, $endpoint = 'weather'){
        $url = 'http://api.hgbrasil.com/'.$endpoint.'/?format=json&';
        
        if(is_array($parametros)){
            // Insere a chave nos parametros
            if(!empty($chave)) $parametros = array_merge($parametros, array('key' => $chave));
            
            // Transforma os parametros em URL
            foreach($parametros as $key => $value){
            if(empty($value)) continue;
            $url .= $key.'='.urlencode($value).'&';
            }
            
            // Obtem os dados da API
            $resposta = file_get_contents(substr($url, 0, -1));
            
            return json_decode($resposta, true);
        } else {
            return false;
        }
        }

}
