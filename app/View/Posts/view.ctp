<!-- File: /app/View/Posts/view.ctp -->
<div class="container">
    <div class="row">
        <h1 style="color: #FF6600" ><?php echo h($post['Post']['title']); ?></h1>
    </div>
    <div class="row">
        <p style="color: #592C85"><small> <strong>Data :</strong> <?php echo $this->Time->format($post['Post']['created'], '%d/%m/%Y %H:%M %p'); ?></small></p>
    </div>
    <div class="row">
        <p style="color: #592C85"><?php echo "<strong>Body:</strong>" . h($post['Post']['body']); ?></p>
    </div>
</div>    

