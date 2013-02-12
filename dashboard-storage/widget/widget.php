<?php
$allowedSpace = get_space_allowed();
$usedSpace = get_space_used();
$availableSpace = get_upload_space_available();
$percentage = round(($usedSpace / $allowedSpace) * 100);
$statusStyle = ($percentage < 70) ? 'good' : 'warning';
?>

<div>
    <div class="bar">
        <div class="line <?php echo $statusStyle; ?>" style="width: <?php echo $percentage; ?>%"></div>
    </div>
</div>

<p>
    Du benutzt im Moment <strong><?php echo $percentage; ?>%</strong> deines <strong><?php echo $allowedSpace ?>
    MB</strong> Speicherplatz.<br>
    Für 3 € im Monat bekommst du 100MB Speicherplatz!
</p>
