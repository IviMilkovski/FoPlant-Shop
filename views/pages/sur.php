<?php
if(!isset($_SESSION['user'])){
   echo "Only Logged in users can take the survey.";
}{
?>
<div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/img/bg-img/1.jpg);">
            <h2>Survey</h2>
        </div>

        <div class="container py-5">
        <div class="row py-5">
   <form action="" method="POST">
       <?php
       $sur = getQuestion();
foreach($sur as $s):

?>
            <div class="form-group p-2 mb-3">
                <label for="exampleInputEmail1">Question</label>
                <h2 name="QName"><?=$s->question?></h2>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="option" id="optionA" value="optionA">
                <label class="form-check-label" for="flexRadioDefault1">
                    <?=$s->optionA?>
                </label>
</div>
<div class="form-check">
                <input class="form-check-input" type="radio" name="option" id="optionB" value="optionB">
                <label class="form-check-label" for="flexRadioDefault1">
                    <?=$s->optionB?>
                </label>
</div>
<div class="form-check">
                <input class="form-check-input" type="radio" name="option" id="optionC" value="optionC">
                <label class="form-check-label" for="flexRadioDefault1">
                    <?=$s->optionC?>
                </label>
</div>
            </div>   
            <?php
            endforeach;
            ?>   
            
            <button type="button" id="surveyBtn" class="btn btn-dark">Submit</button>
            <p id="odg"></p>
</form>
</div>
</div>
</div>
<?php };?>
  