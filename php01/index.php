<?php
require_once 'lib/functions.php';
require_once 'lib/dump.php';
$pets = array_reverse(getPets());

$cleverWelcomeMessage = 'All the love, none of the crap';
$pupCount = count($pets);
?>

<?php require_once 'layout/header.php'; ?>
    <div class="jumbotron">
        <div class="container">
            <h1><?php echo strtoupper(strtolower($cleverWelcomeMessage)); ?></h1>

            <p>Over <?php echo $pupCount ?> pet friends</p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>


<pre class="dump">
    <?php //var_dump($pets);die() ?>
</pre>
    <div class="container">
        <div class="row">
            <?php foreach ($pets as $cutepet) { ?>
            <div class="col-md-4 pet-list-item">
                <h2><?php echo $cutepet['name']; ?></h2>
                <img src="images/<?php echo $cutepet['filename']?>"  class="img-rounded">
                <blockquote class="pet-details">
                    <span class="label label-info">
                        <?php echo $cutepet['breed'] ?>
                    </span>
                    <?php
                    if ($cutepet['age'] == 'hidden') {
                        echo 'Contact owner for age';
                    } elseif (array_key_exists('age', $cutepet) && $cutepet['age'] != '') {
                        echo $cutepet['age'];
                    } else {
                        echo "Unknown";
                    }
                    ?>
                    <?php echo $cutepet['weight'] ?> lbs
                </blockquote>
                <p>
                    <?php echo $cutepet['bio'] ?>
                </p>
            </div>
            <?php }?>
        </div>
        <?php require_once 'layout/footer.php'; ?>