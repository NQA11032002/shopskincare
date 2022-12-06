<input type="checkbox" hidden id="cbCheckLabel">
<label for="cbCheckLabel" class="customer-edit__background"></label>

<div class="products-create__combo">
    <div class="customer-edit__title">
        <h1 class="branch-edit--title">Create combo</h1>
        <i class="fa-solid fa-xmark customer-edit__close"></i>
    </div>
    <div class="products__insert--content">
        <input type="text" id="products__insert--combo-create" class="branch--name" placeholder=" ">
        <label class="label--input" for="products__insert--combo">Name</label>
    </div>
    <div class="container-select">

    </div>

    <button class="btn btn-dark btn-edit">Create</button>
</div>

<div class="branch">
    <div class="branch__items branch__produces">
        <div class="branch__item branch__produce--item">
            <div class="branch__title branch__produce--title">
                <h1>Produce List</h1>
                <button class="btn-insert produce__inserts" value="Inserts"><i
                        class="fa-solid fa-circle-up"></i>Insert</button>
            </div>
            <div class="produce__search">
                <input type="text" class="search--text search--text-produce">
                <i class="fa-solid fa-magnifying-glass produce__search--action"></i>
            </div>

            <div class="branch__table">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="produce--table">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="branch__items branch__categories">
        <div class="brand__item branch__categories--items">
            <div class="branch__title branch__produce--title">
                <h1>Category List</h1>
                <button class="btn-insert category__inserts" value="Inserts"><i
                        class="fa-solid fa-circle-up"></i>Insert</button>
            </div>
            <div class="produce__search">
                <input type="text" class="search--text search--categoires">
                <i class="fa-solid fa-magnifying-glass produce__search--action"></i>
            </div>

            <div class="branch__table">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Categories
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="categories--table">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="branch__items branch__brands">
        <div class="brand__item branch__brands--items">
            <div class="branch__title branch__produce--title">
                <h1>Brand List</h1>
                <button class="btn-insert brand__inserts" value="Inserts"><i
                        class="fa-solid fa-circle-up"></i>Insert</button>
            </div>
            <div class="produce__search">
                <input type="text" class="search--text search--text-brand">
                <i class="fa-solid fa-magnifying-glass produce__search--action"></i>
            </div>

            <div class="branch__table">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="brands--table">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="../Public/js/admin/branch.js"></script>