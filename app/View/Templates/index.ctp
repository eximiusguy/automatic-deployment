<h1>Available Templates</h1>
<table>
    <tr>
        <th>Name</th>
        <th></th>
    </tr>
    <?php foreach ($templates as $template): ?>
    <tr>
        <td><?php echo $template['Template']['id']; ?></td>
    <tr>
    <?php endforeach; ?>
    <?php unset($templates); ?>
</table>