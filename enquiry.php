<?php 
$title = "Factance - a way to ease software development";
$header_data = '';
include('header.php');

?>

<section class="top-intro-section">
    <div class="container frantace-page">
    <div class="text-center ">
       <h1 class="new-h1">Modal pop up is not sufficient for your great vision🔥</h1>        
            <p>
                We thought to give you special area where you can write more about it!
            </p>
            <p>We love to hear your idea or vision</p>
            </div>
    </div>
</section>

<section class="enquiry-section">
    <div class="container">
        <form >
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="fullname" class="fullname" placeholder="Name.."
                    class="form-control" required />
            
                    <input type="email" name="email" class="email" placeholder="Email.."
                    class="form-control" required />
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" id="post_writer" rows="10" onkeyup="countWords();"></textarea>
                        <div class="flex-in-between">
                            <div>
                                <button class="btn btn-primary" id="btnClipboard" style="margin-top:5px;" onClick="copyToClipboard()">
                                🚀 Hit us
                                </button>
                            </div>
                            <div>
                                <span class="word-count">0</span>/1000
                            </div>
                        </div>
                </div>
            </div>
        </form>
    </div>
</section>