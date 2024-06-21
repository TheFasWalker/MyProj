<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >
    <span>{{$title}}</span>
    @if (isset($value))
    <div class="w-50 h-[30rem] pt-5">
        <img class="" src={{asset('storage/' .$value)}} alt="">
    </div>
@endif
    <input  name="{{$name}}" class=" mt-4 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">


</label>