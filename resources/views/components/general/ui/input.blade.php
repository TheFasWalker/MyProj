<label class="flex flex-col  w-fit cursor-pointer" >
    <span class="">{{$title}}</span>

    <input
        class="<?= isset($inputjsclass) ? $inputjsclass : '' ?> border h-5 p-5 rounded "
        type="{{$type}}"
        placeholder="{{$placeholder}}"
        title="{{$description}}"
        name="{{$name}}"
        <?= isset($value) ? 'value='.$value : '' ?>>
</label>
