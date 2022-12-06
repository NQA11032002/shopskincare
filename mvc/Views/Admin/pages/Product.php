    <input type="checkbox" hidden id="cbCheckLabel">
    <label for="cbCheckLabel" class="customer-edit__background"></label>

    <div class="products-create__combo">
        <div class="customer-edit__title">
            <h1>Create combo</h1>
            <i class="fa-solid fa-xmark customer-edit__close"></i>
        </div>
        <div class="products__insert--content">
            <input type="text" id="products__insert--combo-create" placeholder=" ">
            <label class="label--input" for="products__insert--combo-create">Combo</label>
        </div>
        <button class="products-create__combo--action">Create</button>
    </div>

    <div class="customer products">
        <div class="product__insert-top">
            <div class="products__insert--title">
                <h1>Products Insert</h1>
                <p class="products__insert--back"><i class="fa-solid fa-arrow-right-to-bracket"></i>Back
                    list products</p>
            </div>
            <form method="POST" enctype="multipart/form-data" action="./Product/ChangedImage"
                class="products__insert submitFile">
                <div class="products__insert--images">
                    <label for="file1">
                        <img src="" alt="" class="products__insert--image-1">
                        <input type="file" name="Image1" hidden id="file1" class="image-file1">
                        <i class="fa-solid fa-image edit-product__image"></i>
                    </label>

                    <label for="file2">
                        <img src="" alt="" class="products__insert--image-2">
                        <input type="file" name="Image2" hidden id="file2" class="image-file2">
                        <i class="fa-solid fa-image edit-product__image"></i>
                    </label>

                    <label for="file3">
                        <img src="" alt="" class="products__insert--image-3">
                        <input type="file" name="Image3" hidden id="file3" class="image-file3">
                        <i class="fa-solid fa-image edit-product__image"></i>
                    </label>
                </div>
                <p class='Image-error'> </p>
                <div class="products__insert--grid">
                    <div class="products__insert--content">
                        <select name="" id="products__insert--category">
                        </select>
                    </div>
                    <div class="products__insert--content">
                        <select name="" id="products__insert--brand">
                        </select>
                    </div>
                    <div class="products__insert--content">
                        <select name="" id="products__insert--size">
                        </select>
                    </div>

                    <div class="products__insert--content">
                        <select name="" id="products__insert--color">
                        </select>
                    </div>
                    <div class="products__insert--content">
                        <select name="" id="products__insert--produce">
                        </select>
                    </div>
                    <div class="products__insert--content products__insert--content-combo">
                        <select name="" id="products__insert--combo">
                        </select>
                        <div>
                            <input type="button" class="products__insert--combo" value="Create">
                        </div>
                    </div>
                    <div class="products__insert--content">
                        <input type="text" id="products__insert--name" placeholder=" ">
                        <label class="label--input" for="products__insert--name">Name</label>
                    </div>
                    <div class="products__insert--content">
                        <input type="value" id="products__insert--description" placeholder=" ">
                        <label class="label--input" for="products__insert--description">Description</label>
                    </div>
                    <div class="products__insert--content">
                        <input type="value" id="products__insert--fromPrice" placeholder=" ">
                        <label class="label--input" for="products__insert--fromPrice">Price</label>
                    </div>
                    <div class="products__insert--content">
                        <input type="value" id="products__insert--effect" placeholder=" ">
                        <label class="label--input" for="products__insert--effect">Effect</label>
                    </div>
                    <div class="products__insert--content">
                        <input type="value" id="products__insert--usage" placeholder=" ">
                        <label class="label--input" for="products__insert--usage">Usage</label>
                    </div>
                    <div class="products__insert--content">
                        <input type="value" id="products__insert--introduce" placeholder=" ">
                        <label class="label--input" for="products__insert--introduce">Introduce</label>
                    </div>
                </div>
                <p class='infor-error'> </p>
                <div class="products__insert--action">
                    <input type="submit" class="products__insert--action-content">
                </div>
            </form>
        </div>

        <div class="products__infor">
            <div class="customer__title">
                <h1>Products List</h1>
                <div class="customer__search">
                    <input type="text" class="customer__search--content products__search--content">
                    <i class="fa-solid fa-magnifying-glass customer__search--action products__search--action"></i>
                </div>

                <div class="products__btn--insert">
                    <button class="btn-insert product__inserts" value="Inserts"><i
                            class="fa-solid fa-circle-up"></i>Inserts</button>
                </div>
            </div>
            <div class="Products-table">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Produce</th>
                            <th>Price</th>
                            <th>Effect</th>
                            <th>Usage</th>
                            <th>Introduce</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="products-table__contain">

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
    </div>
    <script src="../Public/js/admin/products.js"></script>