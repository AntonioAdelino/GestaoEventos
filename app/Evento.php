<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model{

	protected $fillable = ['localizacao', 'descricao', 'dataInicio', 'dataFim', 'dataPagamento', 'area_id'];

	public static $rules = [
		'localizacao' => 'required',
		'descricao' => 'required',
		'dataInicio' => 'required',
		'dataPagamento' => 'required',
		'dataFim' => 'required',
		'area_id' => 'required'
	];

	public static $messages = [
		'required'=> 'O campo :attribute é obrigatório'
	];

	public function area(){
		return $this->belongsTo('App\Area');
   	}

   	public function atividade(){
	   return $this->hasOne('App\Atividade');
  	}

  	public function boleto(){
	  return $this->hasMany('App\Inscricao');
  	}

  	public function vouchers(){
		return $this->belongsToMany('App\Voucher');
  	}

	public function usuarios(){
		return $this->belongsToMany('App\Usuario');
  	}


}
