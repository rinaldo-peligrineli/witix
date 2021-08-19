<!-- File: /app/View/Posts/index.ctp -->
<div class="text-center" style="color: #FF6600">
    <h1>Blog Posts</h1>
</div>

<div>
    <?php echo $this->Html->link('Adicionar Post', array('action' => 'add'), array('class' => 'btn btn-primary', 'style' => 'background-color: #592C85; border-color: #592C85')); ?>
</div>

<div class="text-right">
    <?php echo "<span style='color: #592C85 '>Páginas:</span> " . $this->Paginator->numbers(); ?>
</div>

<table class="table table-bordered table-striped">
    <tr style="color: #592C85">
        <th>Id</th>
        <th>Titulo</th>
        <th>Ações</th>
        <th>Data Criação</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo as informações dos posts -->

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']), array('style' => 'color: #000000'));?>
            </td>
            <td>
                <?php echo $this->Form->postLink(
                    'Excluir',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Você quer mesmo excluir este registro?'));
                    echo ' | ' . $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']));?>
                
            </td>
            <td><?php echo $this->Time->format($post['Post']['created'], '%d/%m/%Y %H:%M %p'); ?></td>
        

        </tr>
    <?php endforeach;
?>
    <tr> <td>  <?php echo "<span style='color: #592C85 '>Páginas:</span> " . $this->Paginator->numbers(); ?> </td> </tr>
</table>
