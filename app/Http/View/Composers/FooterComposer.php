<?php

namespace App\Http\View\Composers;
use Illuminate\View\View;
use App\Footer;

 
class FooterComposer
{
	public function compose(View $view)
	{
		 $view->with('footers',Footer::get()->first());
	}
}