<div class="p-5 rounded border grid grid-cols-[250px_250px_250px_1fr_250px]">
    <span><?= $orgItem['org_group_name']?></span>
    <?= isset($orgItem['org_group_link']) ? ' <a href="' . $orgItem['org_group_link'] . '" target="_blank">Орггруппа </a>'  : '<span>Ссылка отсутствует</span>' ?>
    <?= isset($orgItem['org_link']) ? ' <a href="' . $orgItem['org_link'] . '" target="_blank">Главный орг </a>'  : '<span>Ссылка отсутствует</span>' ?>
    <?= isset($orgItem['description']) ?
    "<p>{$orgItem['description']}</p>" : '<span> Краткое описание отсутствует</span>'
     ?>
    <a href="{{route('ShowOrganizer',$orgItem['id'])}}" class="customButton flex items-center justify-center">Подробнее</a>
</div>