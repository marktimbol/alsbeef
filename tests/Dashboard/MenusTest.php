<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MenusTest extends TestCase
{
	use DatabaseMigrations;

	public function setUp()
	{
		parent::setUp();
        $this->signIn();
	}

    public function test_show_all_menus()
    {
    	$menu = factory(App\Menu::class)->create();
    	$this->visit('/dashboard/menus')
    		->see($menu->name);
    }

    public function test_show_a_form_when_adding_a_new_menu()
    {
    	$this->visit('/dashboard/menus/create')
    		->see('Add Menu');
    }

    public function test_validate_the_form_when_adding_a_new_menu()
    {
    	$this->visit('/dashboard/menus/create')
    		->press('Save')
    		->see('The name field is required.');
    }

    public function test_store_the_menu_information_in_menus_table()
    {
    	$this->visit('/dashboard/menus/create')
    		->type('Menu Name', 'name')
    		->type('Menu Description', 'description')
    		->press('Save')

    		->seeInDatabase('menus', [
    			'name'	=> 'Menu Name',
    			'slug'	=> 'menu-name',
    			'description'	=> 'Menu Description'
    		]);
    }

    public function test_view_single_menu()
    {
    	$menu = factory(App\Menu::class)->create();
    	$this->visit('/dashboard/menus/'.$menu->id)
    		->see($menu->name);
    }

    public function test_shows_an_edit_form_when_editing_a_menu()
    {
		$menu = factory(App\Menu::class)->create();

		$this->visit('/dashboard/menus/'.$menu->id.'/edit')
			->see('Edit Menu')
			->see($menu->name);
    }

	public function test_validate_the_edit_form_when_updating_a_menu()
	{
		$menu = factory(App\Menu::class)->create();

		$this->visit('/dashboard/menus/'.$menu->id.'/edit')
			->type('', 'name')
			->press('Update')
			->see('The name field is required.');
	}

	public function test_updates_the_menu_information_on_the_database_when_updating_a_menu()
	{
		$menu = factory(App\Menu::class)->create();

		$this->visit('/dashboard/menus/'.$menu->id.'/edit')
			->type('New Description', 'description')
			->press('Update')

			->seeInDatabase('menus', [
				'id'	=> $menu->id,
				'description'	=> 'New Description'
			]);
	}

	public function test_deletes_a_single_menu()
	{
		$menu = factory(App\Menu::class)->create();

		$this->visit('/dashboard/menus/'.$menu->id)
			->press('Delete')

			->dontSeeInDatabase('menus', [
				'id'	=> $menu->id
			]);
	}
}
