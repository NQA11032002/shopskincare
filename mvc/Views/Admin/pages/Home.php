<section class="home">
    <div class="row-1">
        <div class="row-1__left">
            <div class="container">
                <h1>Chart With Product</h1>
                <canvas class="canvas"></canvas>
            </div>
        </div>

        <div class="row-1__right">
            <div class="card__categories">
                <div>
                    <i class="fa-solid fa-user-plus"></i>
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
                <h3 class="currentAccount"></h3>
                <p>User Registrations</p>
            </div>

            <div class="card__brand">
                <div>
                    <i class="fa-solid fa-code-branch"></i>
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
                <h3 class="currentSelled"></h3>
                <p>Product Selled</p>
            </div>

            <div class="card__product">
                <div>
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
                <h3 class="currentProduct"></h3>
                <p>Products</p>
            </div>

            <div class="card--register">
                <div>
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
                <h3 class="currentLogined"></h3>
                <p>User Login</p>
            </div>

            <div class="card-product--sellest">
                <div>
                    <i class="fa-solid fa-crown"></i>
                    <h1 class="card-product__sellest--title">Product Sellest</h1>
                    <i class="fa-solid fa-ellipsis"></i>
                </div>

                <div class="card-product__selles--items">

                </div>
            </div>
        </div>
    </div>
    <div class="row-2">
        <div class="card__user">
            <h1>New Users</h1>
            <div class="card__user--items card-items">

            </div>
        </div>

        <div class="card__event">
            <h1>Event the month</h1>
            <div class="card__event--items card-items">

            </div>
        </div>

        <div class="card__sales">
            <div class="card__sales--title">
                <h1>Sales of the month</h1>
            </div>

            <div class="card__sales--items">
                <div class="card__sales__item">
                    <i class="fa-solid fa-arrow-up-wide-short"></i>
                    <div class="card__sales__item--content">
                        <h3 class="productSell__OfMonth"></h3>
                        <p>Total product sale</p>
                    </div>
                </div>

                <div class="card__sales__item">
                    <i class="fa-solid fa-tag"></i>
                    <div class="card__sales__item--content">
                        <h3 class="productDiscount__OfMonth"></h3>
                        <p>Total product discount</p>
                    </div>
                </div>

                <div class="card__sales__item">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <div class="card__sales__item--content">
                        <h3 class="revenue__OfMonth"></h3>
                        <p>Revenue</p>
                    </div>
                </div>

                <div class="card__sales__item">
                    <i class="fa-solid fa-user"></i>
                    <div class="card__sales__item--content">
                        <h3 class="bill__OfMonth"></h3>
                        <p>Amount Bill</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-3">
        <div class="card-customer__Loyals">
            <div class="card-customer__Loyals--title">
                <h1 class="card-top--title">Top 3 Loyal Customer</h1>
            </div>

            <div class="Card-customer__Loyal">

            </div>
        </div>

        <div class="card-customer__Highest-Rates">
            <div class="card-customer__Highest-Rates--title">
                <h1 class="card-top--title">Highest Rated Customer</h1>
            </div>
            <div class="card-customer__Highest-Rate"></div>

        </div>
    </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script src="../Public/js/admin/chart.js"></script>
<script src="../Public/js/admin/home.js"></script>