<?php

namespace App\Lib;

use App\Models\Danhmuc;

class DatamenuCommon {

    public static function GetMenu(){
        $html = "";
        $menu = Danhmuc::where('parent_id', 0)->get();
        foreach($menu as $i){
            $menuchild = self::getMenuChild($i->id);
            if(strlen($menuchild) == 0){
                $html .= '<li class="menu2"><a href="'.route('productlist',['id' => $i->id]).'">'.$i->name.'</a>';
            }
            else{
                $html .= '<li class="menu1"><a href="'.route('productlist',['id' => $i->id]).'">'.$i->name.'</a>';
                $html .= '<ul class="sub-menu menu2">';
                $html .= $menuchild;
                $html .= '</ul>';
                $html .= '</li>';
            }
        }
        return $html;
    }
    public static function getMenuChild($id){
        $html = "";
        $menuchild = Danhmuc::where('parent_id', $id)->get();
        foreach($menuchild as $i){
           
            $submenu = self::getMenuChild($i->id);
            if(strlen($submenu) > 0) {
                $html .= '<li class="menu2"><a href="'.route('productlist',['id' => $i->id]).'">'.$i->name .'</a>';
                $html .= '<ul class="sub-menu menu3">';
                $html .= $submenu;
                $html .= '</ul>';
                $html .= '</li>';
            } else {
                $html .= '<li><a href="'.route('productlist',['id' => $i->id]).'">' . $i->name . '</a></li>';
            }
        }
        return $html;
    }
}



?>