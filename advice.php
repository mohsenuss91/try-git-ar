<?php 
    include_once 'Core/init.php';
    $advices = new Core\Classes\Advice;
    $numOfChallenge = (isset($_COOKIE['numOfChallenge'])) ?
        (int) $_COOKIE['numOfChallenge'] : 1;

    $result = $advices->getAdvices($numOfChallenge);
?>

<h4>ارشادات</h4>
    <ul>
        <?php foreach($result as $advice): ?>
            <?php if(is_array($advice)): ?>
                <?php foreach($advice as $oneAdvice): ?>
                    <li><?php echo $oneAdvice; ?></li>
                <?php endforeach; ?>
            <?php else: ?>
                <li><?php echo $advice; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
