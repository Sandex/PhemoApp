<?php
require_once __DIR__ . '/../app/AppKernel.php';

$timeStart = microtime(true);

$kernel = new Phemo\AppKernel('dev', true);
$kernel->handle();
?>
<?php if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 'XMLHttpRequest' === $_SERVER['HTTP_X_REQUESTED_WITH'])): ?>
    <!-- @TODO need move to a non exists debug panel -->
    <br clear="all">
    <p style="padding: 15px 0; text-align: center;">
        <span>Time: <?php echo round(microtime(true) - $timeStart, 3) ?> s</span>
        <span>Memory: <?php echo round(memory_get_peak_usage($realUsage = true) / (1024 * 1024), 2) ?> Mb</span>
    </p>
<?php endif; ?>