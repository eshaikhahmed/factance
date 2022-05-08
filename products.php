<?php 
$title = "Products are there to help people!";
$header_data = ' <link rel="stylesheet" href="css/product.css">';
include('header.php');

?>

<section class="top-intro-section">
    <div class="container frantace-page">
        <h1 class="text-center new-h1">Products</h1>
        
    </div>
</section>

<section>
<div class="container frantace-page">
    <div class='product'>
        <img class="img-responsive" src="images/product2.jpg" />
        <p></p>
        <a href="https://factance.com/codefactory" target="_blank"><h2>CodeFactory</h2></a>
        <p>
            It is a tool to make your development faster. 
        </p>
        <p>I have been building this product since 4 years</p>

        <ul class="bullet-points">
            <li>🧲 Create Spring Boot REST APIs in a minute</li>
        </ul>

        <p> Using CodeFactory is bit tricky, soon I'll publish article for its usage! </p>
        <h4>Technology Used</h4>
        <ul class="bullet-points">
            <li>PHP</li>
            <li>JavaScript</li>
            <li>Bootstrap</li>
        </ul>

    </div> 
</section>

<div class="container frantace-page">
    <div class='product'>
        <img class="img-responsive" src="images/product1.jpg" />
        <p></p>
        <a href="https://factance.com/writein" target="_blank"><h2>WriteIn</h2></a>
        <p>I started writing on LinkedIn</p>
        <p> Often prefer to write LinkedIn post with emojis and found trouble to use emojis </p>
        <p>Solved problem and built WriteIn</p>
        <p>WriteIn is an post writer tool with emojis</p>

        <ul class="bullet-points">
            <li>🧲 Post writer</li>
            <li>🧲 Keeps track of frequent emojis</li>
        </ul>

        <h4>Technology Used</h4>
        <ul class="bullet-points">
            <li>JavaScript</li>
            <li>Bootstrap</li>
        </ul>
    </div>
</div>

<?php 
include("footer.php");
?>