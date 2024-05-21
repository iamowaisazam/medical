<?php
include("header.php");
?>

<style>
    /* Container styles */
#categoryContainer {
    padding: 20px;
    /*background-color: #f8f9fa;*/
}

/* Product category box styles */
.product-cat {
    padding: 20px;
    margin-bottom: 20px; /* Add space between product categories */
}

.product-cat .icon-box {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.product-cat .icon-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.product-cat .title {
    margin-top: 20px;
    font-size: 18px;
}

.product-cat .description {
    margin-top: 10px;
    font-size: 14px;
    color: #6c757d;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .product-cat {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (max-width: 767px) {
    .product-cat {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

</style>

 <main id="main">
    <!-- Category 1 -->
    <section class="category-section">
            <div class="category-heading-div">
                <section class="section-breadcrumbs">
                    <div class="breadcrumbs">
                        <a href="/">Home</a> /
                        <span class="active-breadcrumbs">Category</span>
                    </div>
                </section>
                <div id="category-heading-id" >
                
                </div>
            </div>
            <div id="categoryContainer" class="container" data-aos="fade-up">
                <div class="row product-cat-row rowCategory">
                
                </div>
            </div>
    </section>

</main>

<?php
include("footer.php");
?>