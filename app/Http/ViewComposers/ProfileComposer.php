<?php

namespace App\Http\ViewComposers;

use illuminate\View\View;

class ProfileComposer
{
	public function create($view)
	{
		$view->with('married',random_int(0, 1))
		->with('test','say test');

	}
}