<input type="checkbox" hidden id="cbCheckLabel">
<label for="cbCheckLabel" class="customer-edit__background"></label>

<form method="POST" enctype="multipart/form-data" class="products-create__combo form-edit--event">
    <div class="customer-edit__title">
        <h1 class="title-edit">Create Events</h1>
        <i class="fa-solid fa-xmark customer-edit__close"></i>
    </div>

    <label for="file" class="event-edit--image">
        <img src="" alt="" class="products__insert--image-3">
        <input type="file" name="Image" hidden id="file" class="image-file3">
        <i class="fa-solid fa-image edit-product__image event-edit__image--icon"></i>
    </label>
    <p class='Image-error'> </p>

    <select class="form-select select-categories" name="event-categories" aria-label="Default select example">
        <option option value="">Select categories to discount</option>

        <?php
            foreach($data["categories"] as $item)
            {?>
        <option option value="<?php echo $item["ID"] ?>"><?php echo $item["tenTL"]?></option>
        <?php }?>
    </select>

    <div class="products__insert--content event-input">
        <input type="text" name="event-discount" id="products__insert--discount" placeholder=" ">
        <label class="label--input" for="products__insert--name">Discount</label>
    </div>

    <div class="products__insert--content event-input">
        <input type="text" name="event--name" id="products__insert--name" placeholder=" ">
        <label class="label--input" for="products__insert--name">Name</label>
    </div>
    <div class="products__insert--content event-input">
        <input type="text" name="event--code" id="products__insert--giftCode" placeholder=" ">
        <label class="label--input" for="products__insert--giftCode">GiftCode</label>
    </div>
    <div class="products__insert--content event-input">
        <input type="text" name="event--content" id="products__insert--content" placeholder=" ">
        <label class="label--input" for="products__insert--content">Content</label>
    </div>
    <div class="products__insert--content event-input">
        <input type="date" name="event--datestart" id="products__insert--dateStart" placeholder=" ">
        <label class="label--input" for="products__insert--dateStart">Date Start</label>
    </div>
    <div class="products__insert--content event-input">
        <input type="date" name="event--dateend" id="products__insert--dateEnd" placeholder=" ">
        <label class="label--input" for="products__insert--dateEnd">Date End</label>
    </div>
    <input type="submit" value="Create" class="products-create__combo--action"></input>
</form>

<div class="events">
    <div class="events-top">
        <h1 class="title">Event List</h1>

        <div class="customer__search">
            <input type="text" placeholder="search by ID" class="customer__search--content events_search">
            <i class="fa-solid fa-magnifying-glass events-action__search"></i>
        </div>

        <button class="btn-insert event__inserts" value="Inserts"><i class="fa-solid fa-circle-up"></i>Inserts</button>
    </div>

    <div class="events-bottom">
        <div class="events-bottom__content">
            <table class="table">
                <thead>
                    <tr class="table-dark">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>GiftCode</th>
                        <th>Discount</th>
                        <th>Date Start</th>
                        <th>Date End</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="list-events">

                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="../Public/js/admin/event.js"></script>