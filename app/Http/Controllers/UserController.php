<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Pages.UserPage',[
            'name'=>'Сергей',
            'nickName'=>'KIR',
            'surname'=>'Сергеевич',
            'family'=>'Кербицкий',
            'number'=>'01',
            'userId'=>'01',
            'driverLicense'=>' Категория BC',
            'auto'=>false,
            'burthday'=>'25-02-1095',
            'contraindications'=>'Противопоказана жизнь',
            'allergies'=>'Аллергия на душность',
            'extraContacts'=>'Звоните в ближайший морг',
            'about'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad libero aut pariatur modi quia deleniti quod debitis voluptates quasi? Exercitationem, laborum ducimus cupiditate facere natus iste nesciunt explicabo, sit itaque soluta possimus omnis qui inventore quam velit repellat voluptatibus quidem illum eum veniam deleniti sunt ea quod! Ea, illum fugiat! Laudantium aliquam in dignissimos pariatur ad nisi labore, sed aliquid illum omnis deleniti a dolor deserunt odio voluptas? Mollitia, inventore nulla corrupti omnis minus necessitatibus. Praesentium sed corrupti, perspiciatis dolores ex distinctio, culpa magni nihil quibusdam nisi accusantium asperiores deserunt porro rem expedita eligendi at ad eaque exercitationem ullam sunt? Ea fuga molestias assumenda ducimus qui ipsam recusandae omnis quis, natus error consequatur accusantium quae quidem laboriosam dolore voluptate facere perspiciatis repudiandae, dignissimos, veniam repellat enim. Velit adipisci magni accusamus officia? Nostrum porro iure, minima quis eveniet obcaecati enim molestias, corporis cupiditate illo necessitatibus modi ut. Et sit vitae provident accusantium, in dolorem repellat reprehenderit possimus, eos culpa libero cumque sapiente! Facilis inventore ipsa similique at vero laborum sit, asperiores corporis. Possimus laboriosam est dicta quas aut ipsa ipsum totam dignissimos, beatae rerum, sapiente numquam impedit incidunt at in! Laudantium delectus esse quod, eum distinctio quia totam pariatur debitis soluta?'
        ]);
    }
}
