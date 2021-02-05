<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>
<div class="container-company">
    <div class="company-detail">
        <h2>Company Detail</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce suscipit quam accumsan sem malesuada, at
            eleifend leo euismod. Donec et sagittis lorem, in pulvinar dolor. Nunc vel nulla condimentum, porta
            magna et, venenatis tellus. Cras pharetra id mauris ut pulvinar. Mauris sed ex lectus. Mauris metus
            justo, ultricies non felis ut, venenatis consequat ipsum. Curabitur ultrices est et rhoncus volutpat.
            Duis suscipit lorem suscipit nisi finibus, iaculis ultricies ante ullamcorper.

            Nunc sodales purus a mauris eleifend, a fringilla quam facilisis. Nulla iaculis tellus ac eros
            sollicitudin, eget luctus lacus fringilla. Ut vitae ullamcorper turpis. Etiam ornare convallis quam,
            quis finibus ligula vestibulum vel. Curabitur tincidunt fermentum elit. Praesent ac porttitor nulla, sed
            pretium velit. Sed lacinia tortor mauris, eget gravida justo scelerisque ac. Donec eu porta eros,
            eleifend tempus ex. Fusce non odio facilisis, lacinia tortor et, euismod metus. Nam consectetur sed leo
            vitae finibus. Aenean ante mi, ornare eu euismod sit amet, porta nec justo. Aenean malesuada metus
            velit, eu porta mi tristique in. Pellentesque et odio quis nulla lobortis pharetra.</p>
    </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="request" data-bs-toggle="req" data-bs-target="#exampleModal">
    <p>Request</p>
</button>

<!-- Modal -->
<div id="myModal" class="modal req">

    <!-- Modal Content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="content">
            <form id="regForm" action="/home/req" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="tabs">
                    <!--Restaurant-->
                    <div class="tab">
                        <h1>Restaurant</h1>
                        <!--res-name-->
                        <label for="res-name">Restaurant Name:</label>
                        <input type="text" class="res-name" id="res-name" name="res-name" required>
                        <!--res-email-->
                        <label for="res-email">Restaurant email:</label>
                        <input type="text" class="res-email" id="res-email" name="res-email" required>
                        <!--res-location-->
                        <label for="res-location">Location:</label>
                        <input type="text" class="res-location" id="res-location" name="res-location" required>
                        <!--res-shortdesc-->
                        <label for="res-short-desc">Short Desc</label>
                        <input type="text" class="res-short-desc" id="res-short-desc" name="res-short-desc">
                        <!--res-images-->
                        <label for="res-image">Select images to upload:</label>
                        <input type="file" name="res-image[]" class="res-image" id="res-image" multiple required>
                    </div>
                    <!--Menu-->
                    <div class="tab">
                        <h1>Menu</h1>
                        <!--menu-name-->
                        <label for="menu-name[]">Menu Name:</label>
                        <input type="text" class="menu-name" name="menu-name[]" required>
                        <!--menu-category-->
                        <label for="menu-category[]">Menu Category(Food/Drinks/Appetizer/etc):</label>
                        <input type="text" class="menu-category" name="menu-category[]" required>
                        <!--shortdesc-->
                        <label for="menu-short-desc[]">Short Desc</label>
                        <input type="text" class="menu-short-desc" name="menu-short-desc[]">
                        <!--shortdesc-->
                        <label for="menu-price[]">Price</label>
                        <input type="text" class="menu-price" name="menu-price[]">
                        <!--images-->
                        <label for="files-1[]">Select images to upload:</label>
                        <input type="file" name="files-1[]" class="menu-image" multiple required>
                    </div>
                </div>


                <div style="overflow:auto;">
                    <div class="m-btns" style="float:right;">
                        <button type="button" id="prev-btn" onclick="nextPrev(-1,true)" class="grayBtn">
                            <p>Previous</p>
                        </button>
                        <button type="button" id="next-btn" onclick="nextPrev(1,true)" class="greenBtn">
                            <p>Next</p>
                        </button>
                        <button type="button" id="add-more-btn" onclick="addMoreMenu(1,true)" class="greenBtn">
                            <p>Add More Menu</p>
                        </button>
                        <button type="button" id="delete-btn" data-bs-toggle="del" class="redBtn">
                            <p>Delete Page</p>
                        </button>

                        <button type="button" id="submit-btn" class="greenBtn" name="submit">
                            <p>Submit</p>
                        </button>
                    </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;" id="steps">
                    <span id="currentPage">1</span>
                    <span id="maxPage">/ 2</span>
                </div>
            </form>

        </div>
    </div>

</div>

<div id="delete-modal" class="modal del">
    <div class="modal-content c-d">
        <span class="close">&times;</span>
        <p>Are you sure you want to delete this page?</p>
        <div class="m-btns">
            <button type="button" class="grayBtn" id="no">
                <p>No</p>
            </button>
            <button type="button" class="redBtn" id="yes">
                <p>Yes</p>
            </button>
        </div>
    </div>

</div>

<script src="/js/<?= $script; ?>.js"></script>
<?= $this->endSection(); ?>