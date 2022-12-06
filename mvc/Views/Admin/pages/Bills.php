<div class="bill__container">
    <div class="customer bills">
        <div class="customer__title">
            <h1>Bill List</h1>
            <div class="customer__search">
                <input type="text" class="customer__search--content" placeholder="Search by (ID or month)">
                <i class="fa-solid fa-magnifying-glass customer__search--action"></i>
            </div>
        </div>

        <div class="customer__table">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>IDKH</th>
                        <th>DateOrder</th>
                        <th>Shipping fee</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-bill">

                </tbody>
            </table>

        </div>

        <div class="customer__pagination">
            <p>Showing <span class="customer__pagionation--fromPage"></span class="customer__pagination--toPage"> to
                <span class="customer__pagination--totalPage"></span> of
                <span class="customer__pagination--entries"></span> entries
            </p>

            <div class="customer__pagination-contain">
                <i class="fa-solid fa-arrow-left-long previousPage"></i>
                <div class="customer__pagination--item">
                    <input class="customer__pagination--item-page" min=0 value="0" type="text">
                </div>
                <i class="fa-solid fa-arrow-right-long nextPage"></i>
            </div>
        </div>
    </div>

    <div class="detail-bills">
        <div class="back-bills">
            <i class="fa-solid fa-right-to-bracket  back-bills__action"></i>
            Back to bill list
        </div>

        <div class="customer__table bills-detail">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name Customer</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Pay</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody class="detail-bill__table">

                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="../Public/js/admin/bills.js"></script>