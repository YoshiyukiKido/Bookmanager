<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categories;

class CategoryController extends Controller
{
    /**
     * 一覧表示
     * @param Request $req
     * @return void
     */
    public function index(Request $req) {
        $cates = Categories::paginate(5);
        return view('category.index', compact(['cates']));
    }

    /**
     * 更新機能
     * @param Request $req
     * @param [type] $id
     * @return void
     */
    public function update(Request $req, $id) {
        $cate = Categories::find($id);

        if($req->isMethod("post")){
            $validated = $req->validate([
                'name' => 'required',
            ]);

            $cate->name = $req->name;
            $cate->save();
        }
        return view('category.edit', compact(['cate']));
    }

    /**
     * 登録機能
     * @param Request $req
     * @return void
     */
    public function add(Request $req) {
        if($req->isMethod("post")){
            $validated = $req->validate([
                'name' => 'required',
            ]);
            
            $cate = new Categories;
            $cate->name = $req->name;
            $cate->save();
            return redirect('category');
        }
        return view('category.edit');
    }

    /**
     * 削除機能
     * @param Request $req
     * @param [type] $id
     * @return void
     */
    public function delete(Request $req, $id) {
        $cate = Categories::find($id);
        $cate->delete();
        return redirect('category');
    }

}
