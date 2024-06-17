<div class="p-5 rounded border grid grid-cols-[250px_250px_250px_1fr_250px]">
    <span><?= $orgItem['name']?></span>
    <?= isset($orgItem['link']) ? ' <a href="' . $orgItem['link'] . '" target="_blank">Орггруппа </a>'  : 'Ссылка отсутствует' ?>
    <?= isset($orgItem['orgLink']) ? ' <a href="' . $orgItem['orgLink'] . '" target="_blank">Главный орг </a>'  : 'Ссылка отсутствует' ?>
    <?= isset($orgItem['description']) ?
    "<p>{$orgItem['description']}</p>" : '<span> Краткое описание отсутствует</span>'
     ?>
    <a href="{{$orgItem['detailPage']}}" class="customButton flex items-center justify-center">Подробнее</a>
</div>