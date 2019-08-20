<?php

use Illuminate\Support\Facades\Log;

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		$a = 10;
		$b;
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}




}
