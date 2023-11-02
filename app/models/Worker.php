<?php


class JobPost
{
	use Model;

	protected $table = 'worker';

	protected $allowedCloumns = [
		'jobTitle',
		'description',
		'address',
		'created',
        'emp_id',
        'personnel',
        'budget',
        'city',
	];

}