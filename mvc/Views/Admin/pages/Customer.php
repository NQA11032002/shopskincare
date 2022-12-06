    <input type="checkbox" hidden id="cbCheckLabel">
    <label for="cbCheckLabel" class="customer-edit__background"></label>

    <div class="customer-edit">
        <div class="customer-edit__Container">
            <div class="customer-edit__title">
                <h1>Edit event</h1>
                <i class="fa-solid fa-xmark customer-edit__close"></i>
            </div>

            <div class="customer-edit__content">

            </div>
        </div>
    </div>

    <div class="customer customer--container">
        <div class="customer__title">
            <h1>Customer List</h1>
            <div class="customer__search">
                <input type="text" class="customer__search--content" placeholder="Search by (ID or Name)">
                <i class="fa-solid fa-magnifying-glass customer__search--action"></i>
            </div>
        </div>
        <div class="customer__table">
            <table class="table">
                <thead>
                    <tr class="table-dark customer__table--thead">
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birth Day</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Rank</th>
                        <th>Role</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody class="customer__items">

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

    <script src="../Public/js/admin/customer.js"></script>