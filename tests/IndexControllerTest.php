<?php
/**
 * @author trungtt
 */

namespace App\Http\Controllers;


use TestCase;

class IndexControllerTest extends TestCase
{
	public function testIndex() {
		$this->visit("/")->see("Iphone");
	}
}
