<div class="search_input"  id="search_input_box">
    <div class="container">
        <form class="d-flex justify-content-between"  >
            {{csrf_field()}}
            <input type="search" class="form-control" id="search_input" name="search"    placeholder="Search Here">

            <button type="submit" class="btn"></button>

        </form>
    </div>
</div>