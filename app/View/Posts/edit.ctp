<!-- File: /app/View/Posts/edit.ctp -->

<div class="container">
    <div class="text-center" style="color: #FF6600">
    <h1>Editar Posts</h1>
    </div>
    <div class="row" style="color: #592C85">
        <?php
            echo $this->Form->create('Post');
            echo $this->Form->input('title', array('class' => 'form-control col-md-12'));
            echo $this->Form->input('body', array('rows' => '3', 'class' => 'form-control col-md-12'));
            echo $this->Form->input('id', array('type' => 'hidden'));
            echo $this->Form->input('Atualizar Post', array('type' => 'submit', 'class' => 'btn btn-primary', 'style' => 'background-color: #592C85; border-color: #592C85','label'=> ''));
        ?>
    </div>    
</div>    