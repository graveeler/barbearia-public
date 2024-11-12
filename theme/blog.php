<?php $this->layout('_template',['title' => $title]); ?>

<h1>Blog</h1>

<?php $this->start('js'); ?>

<script src="<?= url('theme/js/blog.js'); ?>"></script>

<?php $this->end(); ?>