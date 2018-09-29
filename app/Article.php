<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
	use HasTranslations;

	public $translatable = ['name', 'summary','content'];

	protected $casts = [
		'published_at' => 'datetime'
	];
}
