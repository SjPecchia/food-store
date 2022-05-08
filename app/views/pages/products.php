<?php require APPROOT . "/views/inc/head.php"; ?>
<?php require APPROOT . "/views/inc/nav.php"; ?>
<?php require APPROOT . "/views/inc/subheader.php"; ?>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="section">
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <div class="column one woocommerce-content">

                            <div class="shop-filters">
                                <div class="woocommerce-notices-wrapper"></div>

                                Showing <form method="get" style="display: inline-block;">
                                    <select name="display-count" style="width: auto;">
                                        <option selected='selected'>8</option>
                                        <option>16</option>
                                        <option>24</option>
                                        <option value="all">All</option>
                                    </select>
                                    <input type="hidden" name="page" value="1" />
                                </form> results

                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">

                                        <option value="alpha">Sort alphabetically: a to z</option>
                                        <option val<option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>ue="alpha-rev">Sort alphabetically: z to a</option>
                                        <option value="featured">Featured</option>
                                        <option value="fruits">Fruits</option>
                                        <option value="vegetables">Vegetables</option>
                                        <option value="dairy">Dairy</option>
                                        <option value="meat">Meat</option>
                                        <option value="herbs">Herbs</option>
                                    </select>
                                </form>
                            </div>

                            <div class="products_wrapper isotope_wrapper">
                                <ul class="products grid col-4">
                                    <?php foreach ($data["productss"] as $productss) : ?>
                                    <li class="isotope-item product type-product last instock product_cat-uncategorized has-post-thumbnail shipping-taxable purchasable product-type-simple">

                                        <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                            <div class="image_wrapper">
                                                <a href="<?php echo URLROOT; ?>/product">
                                                    <div class="mask"></div><img src="<?php echo URLROOT; ?>/images/products/<?php echo $productss->name; ?>.jpg" class="scale-with-grid wp-post-image" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale">
                                                <i class="icon-star"></i>
                                            </span>
                                        </div>
                                        <div class="desc">

                                            <h4><a href="<?php echo URLROOT; ?>/product"><?php echo $productss->name; ?></a></h4>

                                            <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&dollar;</span><?php echo $productss->price; ?></span>
                                            </span>

                                        </div>

                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require APPROOT . "/views/inc/footer.php"; ?>