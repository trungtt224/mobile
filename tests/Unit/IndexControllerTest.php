<?php
/**
 * @author trungtt
 */

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class IndexControllerTest extends TestCase
{
	public function testIndex() {
		$this->visit("/")->see("Iphone");
	}
}
