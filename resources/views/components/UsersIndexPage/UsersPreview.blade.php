<div class="border p-2 rounded-sm flex items-center gap-4 w-full  flex-row">
    <x-UsersIndexPage.UserInfoItem
        title="Номер"
        :content="$data['number']"
        />
        <x-UsersIndexPage.UserInfoItem
        title="Позывной"
        :content="$data['nickName']"
        />
        <x-UsersIndexPage.UserInfoItem
        title="Имя"
        :content="$data['name']"
        />
        <x-UsersIndexPage.UserInfoItem
        title="Фамилия"
        :content="$data['surname']"
        />
        <x-UsersIndexPage.UserInfoItem
        title="Отчество"
        :content="$data['family']"
        />

        <a href="{{$data['userId']}}" class=" ml-auto border p-2 hover:bg-slate-500 hover:text-white">Подробнее</a>


</div>