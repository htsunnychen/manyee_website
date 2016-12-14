<?php
namespace app\models;

class GlobalFunction {
	
	public static function getProductMenus() {
		$categories	 = Category::find()
					->where(['parent_id' => NULL])
					->all();
		
		$menus = array();
		foreach ($categories as $category) {
			$menu = new Menu();
			$menu->id = $category->id;
			$menu->name = $category->name;
			$menu->subMenus = self::getSubMenus($category->id);
			
			$menus[] = $menu;
		}
		
		return $menus;
	}
	
	private static function getSubMenus($category_id) {
		$subMenus = array();
		$categories	 = Category::find()
			->where(['parent_id' => $category_id])
			->all();
		
		foreach ($categories as $category) {
			$menu = new Menu();
			$menu->id = $category->id;
			$menu->name = $category->name;
			$menu->subMenu = self::getSubMenus($category->id);
			
			$subMenus[] = $menu;
		}
		
		return $subMenus;
	}
}