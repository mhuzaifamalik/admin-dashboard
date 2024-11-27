<!DOCTYPE html>
<html>

<head>
  <title> Dashboard Products - US Doors Direct </title>
  <meta charset="UTF-8">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/images/fav.png" type="image/x-icon">
  <?php include 'includes/css-links.php';?>
</head>

<body>
  <main>
    <div class="dashboard-wrapper">
      <?php include 'includes/sidebar.php';?>
      <div class="dashboard-content">
        <div class="dashboard-card">
          <h5 id="top-heading" class="theme-h5">Add Product</h5>
          <form class="product-upload-form">
            <div class="row g-4">
              <div class="col-xl-6 col-12">
                <div class="card-inner">
                  <div class="row g-4">
                    <div class="col-12">
                      <div class="input-field">
                        <h6 class="card-inner-h6">Product Model</h6>
                        <input name="model" type="text">
                      </div>
                      <div class="input-field">
                        <h6 class="card-inner-h6">Product Title</h6>
                        <input name="title" type="text">
                      </div>
                      <div class="input-field">
                        <h6 class="card-inner-h6">Description</h6>
                        <textarea name="description"></textarea>
                      </div>
                      <div class="input-field">
                        <h6 class="card-inner-h6">Color Palette</h6>
                        <select name="colors" multiple>

                          <option value="649b7f9e019328c463032ca7">
                            Standard Colors
                          </option>

                          <option value="64a72ece9346e9367deaad9a">
                            Specialty Colors (Tier 1)
                          </option>

                          <option value="64a89b8be4914f63d6544172">
                            Specialty Colors (Tier 2)
                          </option>

                          <option value="64a89bb1e4914f63d6544191">
                            Specialty Colors (Tier 3)
                          </option>

                        </select>
                      </div>
                      <div class="input-field">
                        <h6 class="card-inner-h6">Addons</h6>
                        <select name="addons" multiple>

                          <option value="64a70b7e8272607cdbfd3d9f">
                            Checkbox Variations
                          </option>

                          <option value="64a70d2e8272607cdbfd3dde">
                            Quantity Variations
                          </option>

                          <option value="64a710338272607cdbfd3e0c">
                            Door Mounting
                          </option>

                        </select>
                      </div>
                      <div class="input-field">
                        <h6 class="card-inner-h6">Product Sizes</h6>
                        <div class="row align-items-center">
                          <div class="col-5">
                            <input class="tag-inp" data-name="size" placeholder="Size (eg:4x4)" type="text"
                              data-error="Please enter a valid size in the format '4X5' or '10X10'.">
                          </div>
                          <div class="col-5">
                            <!-- <input class="tag-inp" data-name="price" pattern="^\d+(\.\d{1,2})?$" placeholder="Price" type="text" data-error="Please Insert Valid Price!"> -->
                            <input class="tag-inp" data-name="price" pattern="^\d+(\.\d{1,2})?$" placeholder="Price"
                              type="text" data-error="Please Insert Valid Price!">
                          </div>
                          <div class="col-2">
                            <button class="action-btn tag-btn" type="button">Add Size</button>
                          </div>
                        </div>
                        <ul class="tags-wrapper size-tags"></ul>
                        <input type="hidden" id="product-sizes" name="sizes">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-12">
                <div class="card-inner">
                  <h6 class="card-inner-h6">Add Image</h6>
                  <div class="img-upload-wrapper">
                    <input type="hidden" name="thumbnail">
                    <input class="thumbnail-upload" type="file" id="product-thumbnail" accept="image/*">
                    <label for="product-thumbnail">
                      <img class="thumbnail-placeholder" src="/dashboard/images/img-thumbnail-icon.png" alt="">
                      <p class="theme-p"><span><i class="fa-solid fa-arrow-up-from-bracket"></i></span> Drop your
                        files here, or <span>Browse</span></p>
                    </label>
                  </div>
                </div>
                <button type="submit" class="theme-btn submit-product-form mt-3 ms-auto">Add Product</button>
              </div>
            </div>
          </form>
        </div>
        <div class="dashboard-card mt-4">
          <div class="card-head">
            <h5 class="theme-h5">Products</h5>
          </div>
          <div class="card-inner">
            <h6 class="card-inner-h6">All Products</h6>
            <table class="table dashboard-table product-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Model</th>
                  <th>Title</th>
                  <th>Thumbnail</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <tr data-id="64a709d9843268a61f72e081">
                  <td>
                    64a709d9843268a61f72e081
                  </td>
                  <td>
                    1950
                  </td>
                  <td>
                    Economical Commercial Roll-up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1688668633096.jpeg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64a89ce4e4914f63d65441b1">
                  <td>
                    64a89ce4e4914f63d65441b1
                  </td>
                  <td>
                    3400i
                  </td>
                  <td>
                    Wind Load Rated Commercial Insulated Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1688771812920.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af1d3661854d27a254182d">
                  <td>
                    64af1d3661854d27a254182d
                  </td>
                  <td>
                    3400
                  </td>
                  <td>
                    Dade County Wind Load Rated Commercial Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689197878396.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af240661854d27a2541840">
                  <td>
                    64af240661854d27a2541840
                  </td>
                  <td>
                    3100i
                  </td>
                  <td>
                    Insulated Certified Commercial Windlock Roll-Up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689199621384.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af27b961854d27a254184b">
                  <td>
                    64af27b961854d27a254184b
                  </td>
                  <td>
                    1950 HDi
                  </td>
                  <td>
                    Economical Commercial Roll-up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689200568815.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af2ed061854d27a254185e">
                  <td>
                    64af2ed061854d27a254185e
                  </td>
                  <td>
                    2500i
                  </td>
                  <td>
                    Insulated Commercial Roll-up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689202384312.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af30a16b56941314f7cede">
                  <td>
                    64af30a16b56941314f7cede
                  </td>
                  <td>
                    2000i
                  </td>
                  <td>
                    Insulated Commercial Roll-up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689202848875.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af32776b56941314f7cee9">
                  <td>
                    64af32776b56941314f7cee9
                  </td>
                  <td>
                    1950
                  </td>
                  <td>
                    HD Economical Commercial Roll-up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689203319339.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af33756b56941314f7cef4">
                  <td>
                    64af33756b56941314f7cef4
                  </td>
                  <td>
                    1950i
                  </td>
                  <td>
                    Low Headroom Economical Commercial Insultated Roll-up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689203572603.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af36bf6b56941314f7ceff">
                  <td>
                    64af36bf6b56941314f7ceff
                  </td>
                  <td>
                    1000i
                  </td>
                  <td>
                    Insulated Economical Roll-Up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689204414623.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af3ece6b56941314f7cf0a">
                  <td>
                    64af3ece6b56941314f7cf0a
                  </td>
                  <td>
                    650
                  </td>
                  <td>
                    Mini Door Up To 10x10
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689206477891.jpeg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

                <tr data-id="64af41a46b56941314f7cf15">
                  <td>
                    64af41a46b56941314f7cf15
                  </td>
                  <td>
                    750
                  </td>
                  <td>
                    Mini Wind Rated Roll Up Door
                  </td>
                  <td>
                    <img class="thumbnail-product" src="/uploads\image1689207203265.jpg" alt="">
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>

              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#colorpalette-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>
        </div>
        <div class="dashboard-card mt-4" id="products-color-card">
          <div class="card-head">
            <h5 class="theme-h5">Color Palettes</h5>
            <button class="add-new-btn" data-bs-toggle="modal" data-bs-target="#color-category-modal">Add Category
              <i class="fa-solid fa-plus"></i>
            </button>
          </div>





          <div class="card-inner">
            <h6 class="card-inner-h6">
              Standard Colors
            </h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Value</th>
                  <th>Color</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>


                <tr>
                  <td>
                    Bronze
                  </td>
                  <td>
                    #2e1c11
                  </td>
                  <td>
                    <span class="color-box" style="background-color: #2e1c11"></span>
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <a class="delete-item" href="color/649b8140019328c463032cad" title="Delete Color"><i
                        class="fa-solid fa-trash"></i></a>
                  </td>
                </tr>







                <tr>
                  <td>
                    Cedar Red
                  </td>
                  <td>
                    #6a0000
                  </td>
                  <td>
                    <span class="color-box" style="background-color: #6a0000"></span>
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <a class="delete-item" href="color/64a757ee21cbd55bd6112feb" title="Delete Color"><i
                        class="fa-solid fa-trash"></i></a>
                  </td>
                </tr>



                <tr>
                  <td>
                    Continental Brown
                  </td>
                  <td>
                    #3a2618
                  </td>
                  <td>
                    <span class="color-box" style="background-color: #3a2618"></span>
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <a class="delete-item" href="color/64a7580921cbd55bd6112ff7" title="Delete Color"><i
                        class="fa-solid fa-trash"></i></a>
                  </td>
                </tr>



                <tr>
                  <td>
                    Desert Sand
                  </td>
                  <td>
                    #998b75
                  </td>
                  <td>
                    <span class="color-box" style="background-color: #998b75"></span>
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <a class="delete-item" href="color/64a7583b21cbd55bd611300a" title="Delete Color"><i
                        class="fa-solid fa-trash"></i></a>
                  </td>
                </tr>


              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#colorpalette-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>





          <div class="card-inner mt-3">
            <h6 class="card-inner-h6">
              Specialty Colors (Tier 1)
            </h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Value</th>
                  <th>Color</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>




                <tr>
                  <td>
                    AG Galvalume
                  </td>
                  <td>
                    #abbbbb
                  </td>
                  <td>
                    <span class="color-box" style="background-color: #abbbbb"></span>
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <a class="delete-item" href="color/64a72fd99346e9367deaada8" title="Delete Color"><i
                        class="fa-solid fa-trash"></i></a>
                  </td>
                </tr>



                <tr>
                  <td>
                    Colony Green
                  </td>
                  <td>
                    #627e6d
                  </td>
                  <td>
                    <span class="color-box" style="background-color: #627e6d"></span>
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <a class="delete-item" href="color/64a72ff09346e9367deaadb0" title="Delete Color"><i
                        class="fa-solid fa-trash"></i></a>
                  </td>
                </tr>








              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#colorpalette-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>





          <div class="card-inner mt-3">
            <h6 class="card-inner-h6">
              Specialty Colors (Tier 2)
            </h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Value</th>
                  <th>Color</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>













              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#colorpalette-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>





          <div class="card-inner mt-3">
            <h6 class="card-inner-h6">
              Specialty Colors (Tier 3)
            </h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Value</th>
                  <th>Color</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>













              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#colorpalette-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>

        </div>
        <div class="dashboard-card mt-4">
          <div class="card-head">
            <h5 class="theme-h5">Addons</h5>
            <ul>
              <li>
                <button class="add-new-btn" data-bs-toggle="modal" data-bs-target="#addon-category-modal">Add Addon
                  <i class="fa-solid fa-plus"></i>
                </button>
              </li>
            </ul>
          </div>





          <div class="card-inner">
            <h6 class="card-inner-h6">
              Checkbox Variations
            </h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Price</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>


                <tr>
                  <td>
                    Mounting Plates – For Steel Jambs (per pair – NET)
                  </td>
                  <td>

                  </td>
                  <td>
                    15
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Reduced Drive Chain Hoist (per each)
                  </td>
                  <td>

                  </td>
                  <td>
                    160
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    H501L5
                  </td>
                  <td>

                  </td>
                  <td>
                    959
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Shedmaster
                  </td>
                  <td>

                  </td>
                  <td>
                    499
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Easyroller 14
                  </td>
                  <td>

                  </td>
                  <td>
                    659
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Hiro
                  </td>
                  <td>

                  </td>
                  <td>
                    859
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Manaras
                  </td>
                  <td>

                  </td>
                  <td>
                    849
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>














              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#addon-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>





          <div class="card-inner mt-3">
            <h6 class="card-inner-h6">
              Quantity Variations
            </h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Price</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
















                <tr>
                  <td>
                    Header Seal (per ft. of door width)
                  </td>
                  <td>

                  </td>
                  <td>
                    7.2
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Top Draft Stop (per ft. of door width)
                  </td>
                  <td>

                  </td>
                  <td>
                    4.8
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Side Draft Stop – Includes Retainer Angle (per ft. of door height)
                  </td>
                  <td>

                  </td>
                  <td>
                    8
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>








              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#addon-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>





          <div class="card-inner mt-3">
            <h6 class="card-inner-h6">
              Door Mounting
            </h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Price</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>






















                <tr>
                  <td>
                    Wood
                  </td>
                  <td>

                  </td>
                  <td>
                    0
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Masonry
                  </td>
                  <td>

                  </td>
                  <td>
                    0
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>



                <tr>
                  <td>
                    Steel
                  </td>
                  <td>

                  </td>
                  <td>
                    0
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>


              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#addon-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>

          <!-- <div class="card-inner">
            <h6 class="card-inner-h6">Addon # 1</h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Price</th>
                  <th>type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mounting Plates – For Steel Jambs (per pair – NET)</td>
                  <td>$15.00</td>
                  <td>checkbox</td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#addon-modal">Add
              New <i class="fa-solid fa-plus"></i></button>
          </div>
          <div class="card-inner mt-3">
            <h6 class="card-inner-h6">Addon # 2</h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Price</th>
                  <th>type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Header Seal (per ft. of door width)</td>
                  <td>$7.20</td>
                  <td>Quantity</td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#addon-modal">Add
              New <i class="fa-solid fa-plus"></i></button>
          </div>
          <div class="card-inner mt-3">
            <h6 class="card-inner-h6">Door Mounting</h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Price</th>
                  <th>type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Wood</td>
                  <td>0</td>
                  <td>radio</td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#addon-modal">Add
              New <i class="fa-solid fa-plus"></i></button>
          </div> -->
        </div>
      </div>
    </div>
  </main>
  <div class="modal fade" id="colorpalette-modal" tabindex="-1" aria-labelledby="colorpalette-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="colorpalette-modalLabel">Color Palette</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="color-palette-form">
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Title</h6>
                  <input name="title" type="text">
                </div>
              </div>
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Value</h6>
                  <!--<input class="custom-color-picker" name="value" type="text">-->
                  <input name="value" type="text">
                </div>
              </div>
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Category</h6>
                  <select name="category">
                    <% colorCategory.forEach(cate=> { %>
                    <option value="<%= cate._id %>">
                      <%= cate.title %>
                    </option>
                    <% }) %>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="color-category-modal" tabindex="-1" aria-labelledby="color-category-modal-Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="color-category-modal-Label">Color Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="colorCategoryForm">
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Title</h6>
                  <input name="title" type="text">
                </div>
              </div>
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Price</h6>
                  <input name="price" type="text">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="addon-category-modal" tabindex="-1" aria-labelledby="addon-category-modal-Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addon-category-modal-Label">Addon Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="addons-category-form">
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Title</h6>
                  <input name="title" type="text">
                </div>
              </div>
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Type</h6>
                  <select name="type">
                    <option value="Quantity">Quantity</option>
                    <option value="Radio">Radio</option>
                    <option value="Checkbox">Checkbox</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade" id="addon-modal" tabindex="-1" aria-labelledby="addon-modal-Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addon-modal-Label">Addon Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="addons-item-form">
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Title</h6>
                  <input name="title" type="text">
                </div>
              </div>
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Price</h6>
                  <input name="price" type="text" value="0">
                </div>
              </div>
              <div class="col-12">
                <div class="input-field">
                  <h6 class="card-inner-h6">Category</h6>
                  <select name="category">
                    <% addonsCategory.forEach(cate=> { %>
                    <option value="<%= cate._id %>">
                      <%= cate.title %>
                    </option>
                    <% }) %>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php';?>
  <?php include 'includes/script-links.php';?>
</body>

</html>
<!-- fetch from db -->
<!-- <script>
  const fetchColorData = async () => {
    try {
      const colorRes = await fetch('color/fetch-color-data', {
        method: 'GET',
        headers: {
          "Content-Type": "application/json",
        }
      });
      if (colorRes.status == 200) {
        debugger
        // console.log("unsorted", (await colorRes.json()))
        const colorData = (await colorRes.json()).sort((a, b) => {
          const categoryA = a.category.title.toUpperCase();
          const categoryB = b.category.title.toUpperCase();
          if (categoryA < categoryB) {
            return -1;
          }
          if (categoryA > categoryB) {
            return 1;
          }
          return 0;
        })
        console.log(colorData)

        let cateHtml = ""
        colorData.forEach((cate, ind) => {
          if (ind == 0) {
            clss = "card-inner"
          } else {
            clss = "card-inner mt-3"
          }
          cateHtml += `<div class="${clss}">
            <h6 class="card-inner-h6">
            </h6>
            <table class="table dashboard-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Value</th>
                  <th>Color</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                    <span class="color-box" style="background-color: "></span>
                  </td>
                  <td>
                    <button class="modify-item" title="Edit Color"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="delete-item" title="Delete Color"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <button class="add-new-btn ms-auto" data-bs-toggle="modal" data-bs-target="#colorpalette-modal">
              Add New <i class="fa-solid fa-plus"></i>
            </button>
          </div>`
        })
        $("#products-color-card").append(``)
        console.log(colorRes)
        console.log(colorData)
      }

    } catch (error) {
      console.error('Error:', error);
      // Handle the error
    }
  }
  fetchColorData()
</script> -->
<script>
  $(".product-upload-form").submit((e) => {
    e.preventDefault()
    // let formData = {}
    // $(formElem).find("*[name]").each((ind, inpElem) => {
    //   formData[$(inpElem).attr("name")] = $(inpElem).val()
    // })
    const uploadProduct = async () => {
      try {
        $(".loader").css("display", "flex")
        const imageFile = $("#product-thumbnail")[0].files[0]
        const imgFormData = new FormData();
        imgFormData.append("image", imageFile);
        const thumbnailRes = await fetch('upload-thumbnail', {
          method: 'POST',
          // headers: {
          //   'Content-Type': file.type,
          // },
          body: imgFormData
        });
        const thumbnailData = await thumbnailRes.json()
        if (thumbnailRes.status == 200) {
          debugger
          console.log(thumbnailData)
          const formElem = $(".product-upload-form")
          $(formElem).find(`*[name="thumbnail"]`).val("uploads\\" + thumbnailData.filename)
          let formData = {}
          $(formElem).find("*[name]").each((ind, inpElem) => {
            debugger
            if ($(inpElem).attr("name") == "sizes") {
              formData[$(inpElem).attr("name")] = JSON.parse($(inpElem).val())
            } else {
              formData[$(inpElem).attr("name")] = $(inpElem).val()
            }
          })
          console.log(JSON.stringify([formData]))
          const productRes = await fetch('new-product', {
            method: 'POST',
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify([formData])
          });
          if (productRes.status == 200) {
            alert("Product has been Added...", "success")
            setTimeout(() => {
              location.reload();
            }, 2000);
          } else {
            alert(productRes.message, "danger")
          }
        } else {
          alert(thumbnailData.message, "danger")
        }
        $(".loader").css("display", "none")

      } catch (error) {
        $(".loader").hide()
        console.error('Error:', error);
        alert(error.message, "danger")
      }
    }
    uploadProduct()
  })
  $(".colorCategoryForm").submit((e) => {
    e.preventDefault()
    const formElem = $(".colorCategoryForm")
    let formData = {}
    $(formElem).find("*[name]").each((ind, inpElem) => {
      formData[$(inpElem).attr("name")] = $(inpElem).val()
    })
    console.log(JSON.stringify(formData))
    const addColorCategory = async () => {
      try {
        $(".loader").css("display", "flex")
        const colorCatRes = await fetch('color-category/new-color-category', {
          method: 'POST',
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(formData)
        });
        const colorCateData = await colorCatRes.json()
        if (colorCatRes.status == 200) {
          alert("Color Category has been Added...", "success")
          setTimeout(() => {
            location.reload();
          }, 2000);
        } else {
          alert(colorCateData.message, "danger")
        }
        $(".loader").css("display", "none")

      } catch (error) {
        $(".loader").hide()
        console.error('Error:', error);
      }
    }
    addColorCategory()
  })
  $(".color-palette-form").submit((e) => {
    e.preventDefault()
    const formElem = $(".color-palette-form")
    let formData = {}
    $(formElem).find("*[name]").each((ind, inpElem) => {
      formData[$(inpElem).attr("name")] = $(inpElem).val()
    })
    console.log(JSON.stringify(formData))
    const addColor = async () => {
      try {
        $(".loader").css("display", "flex")
        const colorRes = await fetch('color/new-color', {
          method: 'POST',
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(formData)
        });
        const colorData = await colorRes.json()
        if (colorRes.status == 200) {
          alert("Color has been Added...", "success")
          setTimeout(() => {
            location.reload();
          }, 2000);

        } else {
          alert(colorData.message, "danger")
        }
        console.log(colorRes)
        // Handle the response as needed
        $(".loader").css("display", "none")

      } catch (error) {
        $(".loader").hide()
        console.error('Error:', error);
      }
    }
    addColor()
  })

  $(".addons-category-form").submit((e) => {
    e.preventDefault()
    const formElem = $(".addons-category-form")
    let formData = {}
    $(formElem).find("*[name]").each((ind, inpElem) => {
      formData[$(inpElem).attr("name")] = $(inpElem).val()
    })
    console.log(JSON.stringify(formData))
    const addAddonsCategory = async () => {
      try {
        $(".loader").css("display", "flex")
        const addonsCategoryRes = await fetch('addons-category/new-addons-category', {
          method: 'POST',
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(formData)
        });
        const addonsCategoryData = await addonsCategoryRes.json()
        if (addonsCategoryRes.status == 200) {
          alert("Addon Category has been Added...", "success")
          setTimeout(() => {
            location.reload();
          }, 2000);

        } else {
          alert(addonsCategoryData.message, "danger")
        }
        console.log(addonsCategoryRes)
        // Handle the response as needed
        $(".loader").css("display", "none")

      } catch (error) {
        $(".loader").hide()
        alert(error.message, "danger")
        console.error('Error:', error);
      }
    }
    addAddonsCategory()
  })
  $(".addons-item-form").submit((e) => {
    e.preventDefault()
    const formElem = $(".addons-item-form")
    let formData = {}
    $(formElem).find("*[name]").each((ind, inpElem) => {
      formData[$(inpElem).attr("name")] = $(inpElem).val()
    })
    console.log(JSON.stringify(formData))
    const addAddons = async () => {
      try {
        $(".loader").css("display", "flex")
        const addonsRes = await fetch('addons/new-addons', {
          method: 'POST',
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify(formData)
        });
        const addonsData = await addonsRes.json()
        if (addonsRes.status == 200) {
          alert("Addons has been Added...", "success")
          setTimeout(() => {
            location.reload();
          }, 2000);

        } else {
          alert(addonsData.message, "danger")
        }
        console.log(addonsRes)
        // Handle the response as needed
        $(".loader").css("display", "none")

      } catch (error) {
        $(".loader").hide()
        console.error('Error:', error);
      }
    }
    addAddons()
  })
</script>
<script>
  $(".product-table .modify-item").click(function() {
    const prodGet = async () => {
      try {
        $(".loader").css("display", "flex")
        const prodId = $(this).parents("tr").data("id")
        const prodRes = await fetch(prodId, {
          method: 'POST',
          headers: {
            "Content-Type": "application/json",
          }
        });
        debugger
        const productData = await prodRes.json()
        console.log(productData)
        debugger
        if (prodRes.status == 200) {
          const formElem = $(".addons-item-form")
          $("#top-heading").html("Modify Product")
          Object.keys(productData.product).forEach((key) => {
            if (typeof(productData.product[key]) != "object" && key != "thumbnail") {
              $(`*[name="${key}"]`).val(productData.product[key])
            } else if (key == "sizes") {
              $(`*[name="${key}"]`).val(JSON.stringify(productData.product[key]))
              const tagsWrapper = $(".tag-inp").parents(".input-field").find(".tags-wrapper")
              $(tagsWrapper).html("")
              productData.product[key].forEach(item => {
                $(tagsWrapper).append(`<li data-tag='${JSON.stringify(item)}'>${item.size} (${item.price}$)<button type="button" onclick="removeTag(this)"><i class="fa-regular fa-xmark"></i></button></li>`)
              })
            } else if (key == "thumbnail") {
              debugger
              let img = new Image;
              $(".thumbnail-upload").next().html(img)
              $(img).addClass("img-fluid thumbnail-preview")
              $(img).attr("src", "/" + productData.product[key])
              $(`*[name="${key}"]`).val(productData.product[key])
            }
            console.log(key, productData.product[key]);

          });
          $(".submit-product-form").html("Modify Product")
          $("html, body").animate({
            scrollTop: "0"
          });
        } else {
          alert(productData.message, "danger")
        }
        $(".loader").css("display", "none")

      } catch (error) {
        $(".loader").hide()
        console.error('Error:', error.message);
        alert(error.message, "danger")
      }
    }
    prodGet()
  })
</script>