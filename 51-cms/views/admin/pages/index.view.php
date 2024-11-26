<h1>Admin: manage pages</h1>
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $page):?>
        <tr>
            <td><?=e($page->id)?></td>
            <td><?=e($page->title)?></td>
            <td>
<!--                <a href="index.php?route=admin/pages/delete/--><?php //=e($page->id)?><!--">Delete</a>-->
<!--                <a href="index.php?--><?php //=http_build_query(['route'=>'admin/pages/delete','id'=>$page->id])?><!--">Delete</a>-->
                <a href="index.php?<?=http_build_query(['route'=>'admin/pages/edit','id'=>$page->id])?>">Edit</a>
<!--                <a href="#">View</a>-->
                <form style="display: inline" method="post" action="index.php?<?=http_build_query(['route'=>'admin/pages/delete'])?>">
                    <input type="hidden" name="_csrf" value="<?=e(csrf_token())?>">
                    <input type="hidden" name="id" value="<?=e($page->id)?>">
                    <input class="btn-link" type="submit" value="Delete">
                </form>

            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<a href="index.php?route=admin/pages/create">Add Page</a>