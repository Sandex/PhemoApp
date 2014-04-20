<?php
/* @var $flashSession Phalcon\Flash\Session */
$flashSession = $this->flashSession;
?>
<?php foreach ($flashSession->getMessages() as $type => $messages): ?>
    <div class="alert alert-<?php echo str_replace(['error'], ['danger'], $type) ?>">
        <?php foreach ($messages as $message): ?>
            <?php echo $message ?>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>