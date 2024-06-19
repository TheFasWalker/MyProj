<label  class="cursor-pointer" title='{{$description}}'>
    <span>{{$title}}</span>

    <input type="checkbox" name={{$name}} <?= isset($value) && $value === 'on' ? 'checked' : '' ?>>
</label>