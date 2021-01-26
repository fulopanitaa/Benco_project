<!-- navbar -->
<?php include('navbar.php'); ?>
<!-- navbar -->

<div class="faq-page">
    <div class="inner-container">
        <article>

            <div class="breadcrumb-container">
                    <ul class='breadcrumb'>
                        <li><a href='index.php'>Home</a></li>
                        <li><a id="active">Frequently asked question</a></li>
                    </ul>
            </div>

            <div class="faq-header">

                <div class="faq-title font-s-normal">
                    <h1>Frequently Questions</h1>
                </div>

                <div class="faq-text font-s-normal">
                    <h4 style="text-transform:none">Below are frequently asked questions, you may find the answer for yourself</h4>
                    <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id erat sagittis, faucibus metus malesuada, eleifend turpis. Mauris semper augue id nisl aliquet, a porta lectus mattis. Nulla at tortor augue. In eget enim diam. Donec gravida tortor sem, ac fermentum nibh rutrum sit amet. Nulla convallis mauris vitae congue consequat. Donec interdum nunc purus, vitae vulputate arcu fringilla quis. Vivamus iaculis euismod dui.</p>
                </div>

            </div>

            <div class="accordation-container">

                <div class="accordation">
                    <button class="accordion-btn">Mauris congue euismod purus at semper. Morbi et vulputate massa?</button>
                    <div class="panel">
                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                    </div>
                </div>

                <div class="accordation">
                    <button class="accordion-btn">Donec mattis finibus elit ut tristique?</button>
                    <div class="panel">
                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                    </div>
                </div>

                <div class="accordation">
                    <button class="accordion-btn">Vestibulum a lorem placerat, porttitor urna vel?</button>
                    <div class="panel">
                        <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                    </div>
                </div>

            </div>

        </article>
    </div>
</div>


<script>
var acc = document.getElementsByClassName("accordion-btn");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display=="block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    } 
  });
}
</script>


<!-- Footer-->
<footer>
<?php include('footer.html'); ?>
</footer>