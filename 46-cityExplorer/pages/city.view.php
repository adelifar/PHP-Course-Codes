<div class="container">
    <h1>City: <?= e($city->getCityWithCountry()) ?></h1>
    <table>
        <tbody>
        <tr>
            <th>City name:</th>
            <td><?=$city->city?></td>
        </tr>
        <tr>
            <th>City name(ascii):</th>
            <td><?=$city->cityAscii?></td>
        </tr>
        <tr>
            <th>Country:</th>
            <td><?=$city->country?></td>
        </tr>
        <tr>
            <th>Flag of country:</th>
            <td><?=$city->getFlag()?></td>
        </tr>
        <tr>
            <th>ISO2 code of country:</th>
            <td><?=$city->iso2?></td>
        </tr>
        <tr>
            <th>Population:</th>
            <td><?=$city->population?></td>
        </tr>
        </tbody>
    </table>
</div>