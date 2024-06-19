<label title="{{$description}}" class="flex flex-col">
    <span>{{$title}}</span>
    <textarea name="{{$name}}" placeholder="{{$placeholder}}" class="border rounded p-2 resize-none h-[250px] w-full" id=<?= isset($id)? $id : '' ?> >
        <?= isset($value)? $value : '' ?>
    </textarea>

</label>
{{--   TODO : поле не добавляется при отправке  --}}