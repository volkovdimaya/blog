<?php

class LookupTest extends WebTestCase
{
	public $fixtures=array(
		'lookups'=>'Lookup',
	);

	public function testShow()
	{
		$this->open('?r=lookup/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=lookup/create');
	}

	public function testUpdate()
	{
		$this->open('?r=lookup/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=lookup/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=lookup/index');
	}

	public function testAdmin()
	{
		$this->open('?r=lookup/admin');
	}
}
