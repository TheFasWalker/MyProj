<label title="{{$description}}" class="flex flex-col">
    <span>{{$title}}</span>
    <textarea placeholder="{{$placeholder}}" class="border rounded p-2 resize-none h-[250px] w-full"><?= isset($value)? $value : '' ?></textarea>
</label>