<?php

namespace UEO\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UEOUserBundle extends Bundle
{
	public function getParent() {
        return 'FOSUserBundle';
    }
}