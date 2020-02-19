<?php 
include 'header.php'; 
?>

<div class="cont">
<h1 class='spect'>Contact Information</h1>
</div>
<div class="container" style="text-align: center;">
        <div class="row" style="padding: 30px">
            <div class="col-md">
                <figure style="justify-content: center;">
                    <img src="img/contacts.png" alt="contact" style="height:120px;">
                    <figcaption>
                        <p style="font-family: Bebas Neue; font-size: 30px; padding-top: 30px;"><b>Contact number</b></p>
                        <p>+358 12 3456789</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md">
                <figure style="justify-content: center;">
                    <img src="img/location.png" alt="contact" style="height:120px;">
                    <figcaption>
                    <p style="font-family: Bebas Neue; font-size: 30px; padding-top: 30px;"><b>Office adress</b></p>
                        <p>Vankanlähde 9, 13100 Hämeenlinna</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md">
                <figure style="justify-content: center;">
                    <img src="img/time.png" alt="contact" style="height:120px;">
                    <figcaption>
                    <p style="font-family: Bebas Neue; font-size: 30px; padding-top: 30px;"><b>Working hours</b></p>
                        <p>12:00 - 00:00 <br /> (without breaks and days off)</p>
                    </figcaption>
                </figure>
            </div>
        </div>
</div>

<hr style="margin: 50px;"/>

<div style="background-image: url('img/hall.jpg'); background-position: center; background-size: cover;">
<div class="container text-center" style="width: 50%">
    <p id="fm" style="color: white; padding-top: 70px;">Learn more</p>
    <p style="color: white">If you have questions about our restaurant, about the organization of banquets, or you want to book a table in the restaurant, fill out the fields below and we will call you back</p>
    
    <form  method="post" style="padding-bottom: 50px;" action="create.php">
        <div class="form-group">
            <input required type="tel" name="number" placeholder="Phone number" class="form-control">
        </div>
        <div class="form-group">
            <input required type="text" name="name" placeholder="Your name" class="form-control">
        </div>
        <div class="form-group">
            <textarea name="comment" rows="3" placeholder="Your comment" class="form-control"></textarea>
        </div>
        <button class="btn btn-outline-light" type="submit" name="submit" value="Save Data" style="width:100%">Submit</button>
        <?php 
        
            ?>
    </form>
</div>
</div>



<?php include 'footer.php' ?>