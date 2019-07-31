<?php
require 'lib/functions.php';
require 'layout/header.php';

foreach ($_REQUEST as $key=>$request) {
    $$key = $request;
}
$pets = getPets();
if(isset($request)){
    $newPets = [
        "name" => $name,
        "breed" => $breed,
        "weight" => $weight,
        "bio" => $bio,
        "age" => '',
        "image" => '',
    ];

    $pets[] = $newPets;
    $success = savePets($pets);

    if($success) {
        header('Location: /');
    }
}

?>
<!--<pre class="dump">
</pre>-->
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Add your Pet! Squirrel!</h1>
            <form action="pets_new.php" method="post">
                <div class="form-group">
                    <label for="pet-name" class="control-label">Pet Name</label>
                    <input type="text" class="form-control" name="name" id="pet-name" />
                </div>
                <div class="form-group">
                    <label for="pet-breed" class="control-label">Breed</label>
                    <input type="text" class="form-control" name="breed" id="pet-breed" />
                </div>
                <div class="form-group">
                    <label for="pet-weight" class="control-label">Weight (lbs)</label>
                    <input type="text" class="form-control" name="weight" id="pet-weight" />
                </div>
                <div class="form-group">
                    <label for="pet-bio" class="control-label">Pet Bio</label>
                    <textarea type="text" class="form-control" name="bio" id="pet-bio" /></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-heart"></span>
                    Add
                </button>
            </form>

        </div>
    </div>
</div>
<?php require 'layout/footer.php'; ?>
