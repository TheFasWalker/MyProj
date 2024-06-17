<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrgaIndexController extends Controller
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
        return view('Pages.OrgIndexPage',[
            'name' => 'eventName2',
            'orgName' => 'OrgName2',
            'orgLink' => 'OrgLink2',
            'eventPhoto'=>'https://cs13.pikabu.ru/images/big_size_comm/2020-08_4/1597756773144037947.png',
'orgGroupGroupLink'=>'',
            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi architecto nam rerum sequi doloremque quaerat tenetur ipsa, eveniet quasi a!',
            'cars' => true,
            'medicine' => false,
            'sqb' => false,
            'engeneer'=>true,
            'length' => '8 часов',
            'responsiblePerson' => 'UserName',
            'responsiblePersonLink' => 'https://vk.com/feed',
            'photoUrl' => 'https://sun9-28.userapi.com/impg/qMgqn6VDh63uZg4pRuTYQ98T5seZvzZ65WfdLg/vvqpSt-eAKY.jpg?size=1280x960&quality=95&sign=7e19abdedc076c4a7860abfdaefeb837&type=album',
            'eventLink' => '#',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis dolorum laborum eius, nemo, non quis porro, aperiam in eaque mollitia sequi voluptatum. Esse quos ad totam impedit corrupti dolore officia quod necessitatibus perferendis ullam harum ipsa maxime eum natus omnis, ut itaque sapiente accusantium. Mollitia vero quam sit nam?',
            'script'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo optio corrupti ipsa laborum fuga soluta inventore repellat laudantium, sunt consequatur esse. Corporis, aliquam. Facere nihil placeat ea inventore magni id minima voluptatibus necessitatibus ab quas aperiam quod eligendi odit rerum voluptatum dolorum distinctio accusamus quo, veritatis, laboriosam a provident. Ad corrupti eum, impedit soluta consequatur consectetur incidunt in quod autem voluptate quibusdam veritatis fugit reiciendis itaque. Dolore sit vel delectus doloribus vero tempore molestias animi? Consequatur tempore eveniet deserunt fugiat voluptatem fuga molestiae totam quaerat autem officia. Repellendus dicta quisquam deleniti pariatur qui cupiditate tempore totam delectus? Tempore reiciendis ipsam itaque perspiciatis sunt recusandae odit iure et consectetur fugiat dolorem dicta modi est placeat rerum delectus dignissimos, nulla natus. Quae voluptatem aliquam sunt autem recusandae, ipsam nihil consequatur obcaecati, doloribus modi molestiae libero fugit ducimus dolorum nisi optio dicta consectetur ipsa! Ex hic perferendis reiciendis dicta asperiores laboriosam veritatis voluptates. Voluptatum sed doloribus eaque dolores! Explicabo est esse quaerat odit porro placeat voluptatibus facere ea excepturi quam provident doloribus ratione nulla non quae optio cupiditate praesentium id error labore, nesciunt officiis modi molestias! Vel esse est aliquid sint quibusdam delectus eligendi corrupti quo amet nemo non vitae, ullam rerum, quis mollitia voluptatum pariatur dicta recusandae, molestiae iure dolore facilis quidem reiciendis alias. Explicabo, voluptate! Doloribus officiis perspiciatis, repellendus perferendis nesciunt exercitationem distinctio, modi iste maxime ea rerum commodi at quisquam, veniam corporis inventore est voluptatibus iure dicta suscipit ab quam laboriosam ut? Est animi veniam praesentium, ipsum dolorem commodi quasi repellendus illo? Dolorum inventore nemo praesentium fugit recusandae voluptatem ipsa natus nobis! Qui vitae ipsam voluptatibus nobis, repudiandae a veniam beatae cum? Recusandae ipsam est tenetur dolorum optio distinctio sint! Unde recusandae minus ipsum vitae praesentium laboriosam quo nisi molestiae labore perspiciatis optio at, quam nemo, ut aperiam omnis, culpa officiis autem ipsam hic qui. Ipsam maxime sed odit quisquam perspiciatis non totam atque repellendus cumque, labore, consequatur voluptate animi optio eaque officiis debitis! Tempore perspiciatis sunt quisquam minus? Odit ut ratione beatae laudantium error perspiciatis? Iusto id dicta at enim quas corrupti animi quibusdam vero perspiciatis consequuntur architecto, eius hic debitis recusandae, ad obcaecati neque pariatur excepturi repellat eveniet! Eveniet libero repudiandae iste ea explicabo corrupti aut ipsam vel cum asperiores, dolorem dolorum aspernatur, alias facilis eos rerum harum culpa itaque reprehenderit, doloremque numquam ad corporis quis officiis? Modi provident quibusdam aliquid consequuntur quo hic ipsa obcaecati, eum odio omnis necessitatibus debitis repellendus. Aut deleniti incidunt tenetur, magni dolor sed porro deserunt hic neque placeat voluptas. Delectus asperiores, officia, dolorum, in quasi est dolore quas explicabo aut ullam nostrum perferendis omnis. Dolor sapiente blanditiis quam ad aut, itaque magni? Incidunt dignissimos architecto totam expedita quibusdam alias, soluta iusto ipsa pariatur asperiores repellendus ipsum dolores illo similique consequatur? Voluptatum tenetur dicta autem maiores omnis at! Maxime consectetur voluptatem dolore dolorum, perferendis nobis voluptas natus doloribus atque, fugit officia! Unde minima non soluta provident eveniet tenetur deserunt nesciunt. Aliquid placeat corporis qui voluptas earum ab nesciunt expedita consequatur perferendis, repudiandae dicta?'
        ]);
    }
    public function edit()
    {
        return view('Pages.EditOrgIndexPage',[
            'name' => 'eventName2',
            'orgName' => 'OrgName2',
            'orgLink' => 'OrgLink2',
            'eventPhoto'=>'https://cs13.pikabu.ru/images/big_size_comm/2020-08_4/1597756773144037947.png',
'orgGroupGroupLink'=>'',
            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi architecto nam rerum sequi doloremque quaerat tenetur ipsa, eveniet quasi a!',
            'cars' => true,
            'medicine' => false,
            'sqb' => false,
            'engeneer'=>true,
            'length' => '8 часов',
            'responsiblePerson' => 'UserName',
            'responsiblePersonLink' => 'https://vk.com/feed',
            'photoUrl' => 'https://sun9-28.userapi.com/impg/qMgqn6VDh63uZg4pRuTYQ98T5seZvzZ65WfdLg/vvqpSt-eAKY.jpg?size=1280x960&quality=95&sign=7e19abdedc076c4a7860abfdaefeb837&type=album',
            'eventLink' => '#',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse debitis dolorum laborum eius, nemo, non quis porro, aperiam in eaque mollitia sequi voluptatum. Esse quos ad totam impedit corrupti dolore officia quod necessitatibus perferendis ullam harum ipsa maxime eum natus omnis, ut itaque sapiente accusantium. Mollitia vero quam sit nam?',
            'script'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo optio corrupti ipsa laborum fuga soluta inventore repellat laudantium, sunt consequatur esse. Corporis, aliquam. Facere nihil placeat ea inventore magni id minima voluptatibus necessitatibus ab quas aperiam quod eligendi odit rerum voluptatum dolorum distinctio accusamus quo, veritatis, laboriosam a provident. Ad corrupti eum, impedit soluta consequatur consectetur incidunt in quod autem voluptate quibusdam veritatis fugit reiciendis itaque. Dolore sit vel delectus doloribus vero tempore molestias animi? Consequatur tempore eveniet deserunt fugiat voluptatem fuga molestiae totam quaerat autem officia. Repellendus dicta quisquam deleniti pariatur qui cupiditate tempore totam delectus? Tempore reiciendis ipsam itaque perspiciatis sunt recusandae odit iure et consectetur fugiat dolorem dicta modi est placeat rerum delectus dignissimos, nulla natus. Quae voluptatem aliquam sunt autem recusandae, ipsam nihil consequatur obcaecati, doloribus modi molestiae libero fugit ducimus dolorum nisi optio dicta consectetur ipsa! Ex hic perferendis reiciendis dicta asperiores laboriosam veritatis voluptates. Voluptatum sed doloribus eaque dolores! Explicabo est esse quaerat odit porro placeat voluptatibus facere ea excepturi quam provident doloribus ratione nulla non quae optio cupiditate praesentium id error labore, nesciunt officiis modi molestias! Vel esse est aliquid sint quibusdam delectus eligendi corrupti quo amet nemo non vitae, ullam rerum, quis mollitia voluptatum pariatur dicta recusandae, molestiae iure dolore facilis quidem reiciendis alias. Explicabo, voluptate! Doloribus officiis perspiciatis, repellendus perferendis nesciunt exercitationem distinctio, modi iste maxime ea rerum commodi at quisquam, veniam corporis inventore est voluptatibus iure dicta suscipit ab quam laboriosam ut? Est animi veniam praesentium, ipsum dolorem commodi quasi repellendus illo? Dolorum inventore nemo praesentium fugit recusandae voluptatem ipsa natus nobis! Qui vitae ipsam voluptatibus nobis, repudiandae a veniam beatae cum? Recusandae ipsam est tenetur dolorum optio distinctio sint! Unde recusandae minus ipsum vitae praesentium laboriosam quo nisi molestiae labore perspiciatis optio at, quam nemo, ut aperiam omnis, culpa officiis autem ipsam hic qui. Ipsam maxime sed odit quisquam perspiciatis non totam atque repellendus cumque, labore, consequatur voluptate animi optio eaque officiis debitis! Tempore perspiciatis sunt quisquam minus? Odit ut ratione beatae laudantium error perspiciatis? Iusto id dicta at enim quas corrupti animi quibusdam vero perspiciatis consequuntur architecto, eius hic debitis recusandae, ad obcaecati neque pariatur excepturi repellat eveniet! Eveniet libero repudiandae iste ea explicabo corrupti aut ipsam vel cum asperiores, dolorem dolorum aspernatur, alias facilis eos rerum harum culpa itaque reprehenderit, doloremque numquam ad corporis quis officiis? Modi provident quibusdam aliquid consequuntur quo hic ipsa obcaecati, eum odio omnis necessitatibus debitis repellendus. Aut deleniti incidunt tenetur, magni dolor sed porro deserunt hic neque placeat voluptas. Delectus asperiores, officia, dolorum, in quasi est dolore quas explicabo aut ullam nostrum perferendis omnis. Dolor sapiente blanditiis quam ad aut, itaque magni? Incidunt dignissimos architecto totam expedita quibusdam alias, soluta iusto ipsa pariatur asperiores repellendus ipsum dolores illo similique consequatur? Voluptatum tenetur dicta autem maiores omnis at! Maxime consectetur voluptatem dolore dolorum, perferendis nobis voluptas natus doloribus atque, fugit officia! Unde minima non soluta provident eveniet tenetur deserunt nesciunt. Aliquid placeat corporis qui voluptas earum ab nesciunt expedita consequatur perferendis, repudiandae dicta?'
        ]);
    }
}
