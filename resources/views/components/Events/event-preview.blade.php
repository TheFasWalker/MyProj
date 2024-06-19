<?php
$image_url;

if( isset($data['previewPhoto']) && $data['previewPhoto'] != '' && $data['previewPhoto'] != ' ') {
    $image_url = asset($data['previewPhoto']);
} else {
    $image_url = asset('img/noImage.jpg');
}
?>

<div class="flex flex-col border rounded-sm py-3 px-3 gap-4">
    <h3 class="text-lg text-center"> {{$data['name']}}</h3>
    <div class="w-[100%] h-56">
        <img src="<?= $image_url?>" alt="">
    </div>

    <a href="#" target="_blank">{{$data['orgName']}}</a>
    <?= (isset($data['description']) ? $data['description'] : '') ?>
    <div class="w-full">
        <h4 class="text-lg font-semibold text-center mb-3">Особенности мерноприятия</h4>
        <div class="grid gap-2 grid-cols-2">
            <ul>
                <?= (isset($data['rotationTechnique']) && $data['rotationTechnique'] == true )  ? '<li>Техника для ротации на полигоне</li>' : '';?>
                <?= (isset($data['warTechnique']) && $data['warTechnique'] == true ) ? '<li>Применение военной техники</li>' : ''; ?>
                <?= (isset($data['peoplesCars']) && $data['peoplesCars'] == true ) ? '<li>Использование техники игроков</li>' : '';?>
                <?= (isset($data['medicine']) && $data['medicine'] == true ) ? '<li>Использование медицины</li>' : '';?>
                <?= (isset($data['engeneer']) && $data['engeneer'] == true ) ? '<li>Использование инженерной подготовки</li>' : '';?>
                <?= (isset($data['sqb']) && $data['sqb'] == true ) ? '<li>Сценарий SQB</li>' : '';?>
                <?= (isset($data['liveCamp']) && $data['liveCamp'] == true ) ? '<li>Жилой(штурмуемый) лагерь</li>' : '';?>
            </ul>
            <ul>
                <li> Ответственный
                    <?= (isset($data['responsiblePerson']) && trim($data['responsiblePerson']) != '' )
                        ? "<a href='" . htmlspecialchars($data['responsiblePersonLink']) . "'>" . htmlspecialchars($data['responsiblePerson']) . "</a>"
                        :
                        ' не назначен'?>
                </li>
                <?= (isset($data['length']) && trim($data['length']) != '' )
                ?
                "<li>Длительность : " .  $data['length'] . "</li>"
                : ''
                ?>
                <?= (isset($data['eventLink']) && trim($data['eventLink'] != '') )
                    ?
                    "<li><a href='" .  $data['eventLink'] . "'  target='_blank'> ССылка на событие</a></li>"
                    :
                    '<li>No eventLink</li>'
                ?>

            </ul>

        </div>
    </div>



    <a class="w-[100%] flex items-center justify-center h-10 border font-bold mt-auto hover:bg-slate-300 hover:text-white"
     href="event/{{$data->id}}">Подробнее</a>



</div>