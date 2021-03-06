<?php

namespace fishpond;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	private $rules=[
		'title' => 'required',
		'author' => 'required',
		'content' => 'required',
		'user_id' => 'required',
		];
	protected $fillable=['title', 'author', 'content', 'user_id'];

	public function labels()
	{
		return $this->belongsToMany('fishpond\Label')->withTimestamps();
	}

	public function user()
	{
		return $this->belongsTo('fishpond\User');
	}
}
