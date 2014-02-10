<?php

namespace Bd\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BdUserBundle extends Bundle
{
	public function getParent()
  	{
    	return 'FOSUserBundle';
  	}
}
