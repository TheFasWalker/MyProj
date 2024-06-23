<label class="flex flex-col w-full cursor-pointer" >
    <span class="">{{$title}}</span>

    <input
        class="<?= isset($inputjsclass) ? $inputjsclass : '' ?> border h-5 p-5 rounded "
        type="{{$type}}"
        placeholder="{{$placeholder}}"
        title="{{$description}}"
        name="{{$name}}"
        @if(@isset($value))
             value="<?= isset($value) ? $value : '' ?>"
        @endisset
        @if(@isset($step))
        step="{{$step}}"
        @endisset

        >

</label>
