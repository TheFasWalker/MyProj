<div class="p-5 rounded border grid grid-cols-[250px_250px_250px_1fr_250px]">
    <span><?= $orgItem['orgGroupName']?></span>
    <?= isset($orgItem['orgGroupLink']) ? ' <a href="' . $orgItem['orgGroupLink'] . '" target="_blank">Орггруппа </a>'  : '<span>Ссылка отсутствует</span>' ?>
    <?= isset($orgItem['orgLink']) ? ' <a href="' . $orgItem['orgLink'] . '" target="_blank">Главный орг </a>'  : '<span>Ссылка отсутствует</span>' ?>
    <?= isset($orgItem['description']) ?
    "<p>{$orgItem['description']}</p>" : '<span> Краткое описание отсутствует</span>'
     ?>
    <a href="{{route('ShowOrganizer',$orgItem['id'])}}" class="customButton flex items-center justify-center">Подробнее</a>
</div>