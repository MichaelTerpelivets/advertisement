<?php

namespace App\Http\Controllers\Advert;

use App\Models\Advert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class advertController extends Controller
{
    /**
     * Метод вывода представления создания обьявления
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        return view('advert.add_advert');
    }

    /**
     * Метод проверки на валидность данных и запись в таблицу
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $this->validate($request,[
            'title'=>'required|max:255',
            'description'=>'required|min:15'
        ]);
        $add_advert = new Advert();
        $add_advert->title = strip_tags($request->title);
        $add_advert->description = strip_tags($request->description);
        $add_advert->author_id = Auth::user()->id;
        $add_advert->save();
        return redirect('/');
    }

    /**
     * Метод вывода представления с просмотром обьявления
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $advert = Advert::find($id);
        return view('advert.show_advert',compact('advert'));
    }

    /**
     * Метод вывода представления для редактирования обьявления
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function edit($id)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $edit_advert = Advert::find($id);
        return view('advert.edit_advert',compact('edit_advert'));
    }

    /**
     * метод проверки на валидность отредактированных данных обьявления и запись в таблицу
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $update_advert= Advert::find($id);
        if(!$update_advert){
            return back();
        }
        $this->validate($request,[
            'title'=>'required|max:255',
            'description'=>'required|min:15'
        ]);
        $update_advert->title= strip_tags($request->title);
        $update_advert->description = strip_tags($request->description);
        $update_advert->save();
        return redirect('/');
    }

    /**
     * Метод удаления обьявления с таблицы в БД
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        if(!Auth::check()){
            return redirect('/login');
        }
        $delete = Advert::find($id);
        $delete->delete();
        return redirect('/');
    }
}
