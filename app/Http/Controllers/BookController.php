<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Books;
use App\Models\Categories;

class BookController extends Controller
{
    /**
     * 一覧表示
     * @param Request $req
     * @return void
     */
    public function index(Request $req) {
        //$items = DB::table('books')->paginate(5);
        $books = Books::paginate(5);
        //dd($items);
        return view('book.index', compact(['books']));
    }

    /**
     * キーワード検索
     * @param Request $req
     * @return void
     */
    public function search(Request $req) {
        // キーワード取得
        $word = $req->adminlteSearch;
        $query = Books::query();

        // もし検索フォームにキーワードが入力されたら
        if ($word) {
            $spaceConversion = mb_convert_kana($word, 's');
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value) {
                $query->where('title', 'like', '%' . $value . '%');
            }
            // 上記で取得した$queryをページネートにし、変数$usersに代入
            $books = $query->paginate(5);
            return view('book.index', compact(['books']));
        }
        return redirect('book');
    }

    /**
     * 更新機能
     * @param Request $req
     * @param [type] $id
     * @return void
     */
    public function update(Request $req, $id) {
        $book = Books::find($id);
        //dd($item->category);
        $categories = Categories::get();

        if($req->isMethod("post")){
            $validated = $req->validate([
                'title' => 'required',
                'category_id' => 'required',
            ]);

            $book->title = $req->title;
            $book->category_id = $req->category_id;
            $book->note = $req->note;
            $book->save();
        }
        return view('book.edit', compact(['book', 'categories']));
    }

    /**
     * 登録機能
     * @param Request $req
     * @return void
     */
    public function add(Request $req) {
        if($req->isMethod("post")){
            $validated = $req->validate([
                'title' => 'required',
                'category_id' => 'required',
            ]);
            
            $book = new Books;
            $book->user_id = Auth::id();
            $book->title = $req->title;
            $book->category_id = $req->category_id;
            $book->note = $req->note;
            $book->save();
            return redirect('book');
        }
        $categories = Categories::get();
        return view('book.edit', compact('categories'));
    }

    /**
     * 削除機能
     * @param Request $req
     * @param [type] $id
     * @return void
     */
    public function delete(Request $req, $id) {
        $book = Books::find($id);
        $book->delete();
        return redirect('book');
    }
}
