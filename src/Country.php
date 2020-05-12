<?php


namespace JochenTimmermans\LaravelCountries;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	/**
	 * @var array
	 */
	protected $fillable = [ 'name', 'name_full', 'iso_2', 'iso_3', 'numeric', 'tld' ];
}