<!DOCTYPE html>
<html>

<head>
    <title> Dashboard Resources - US Doors Direct </title>
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
                    <h5 class="theme-h5">Add Resources</h5>
                    <form class="resource-upload-form">
                        <div class="row g-4">
                            <div class="col-xl-6 col-12">
                                <div class="card-inner">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Resource Title</h6>
                                                <input name="title" type="text">
                                            </div>
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Model Number</h6>
                                                <input name="model" type="text">
                                            </div>
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Product Link</h6>
                                                <input name="productlink" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12">
                                <div class="card-inner">
                                    <h6 class="card-inner-h6">Add PDF</h6>
                                    <div class="img-upload-wrapper">
                                        <input type="hidden" name="pdfUrl">
                                        <input type="file" class="pdf-upload" id="pdf-upload-resource"
                                            accept="application/pdf">
                                        <label for="pdf-upload-resource">
                                            <img class="thumbnail-placeholder"
                                                src="/dashboard/images/pdf-thumbnail-icon.png" alt="">
                                            <p class="theme-p"><span><i
                                                        class="fa-solid fa-arrow-up-from-bracket"></i></span> Drop your
                                                files here, or <span>Browse</span></p>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="theme-btn mt-3 ms-auto">Add Resource</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dashboard-card mt-3">
                    <h5 class="theme-h5">All Resources</h5>
                    <table class="table dashboard-table resources-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>title</th>
                                <th>model</th>
                                <th>products</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>
                                    <object data="/usdoorsdev/uploads\resources\pdf1689031405266.pdf"
                                        type="application/pdf" width="100%" height="800px">
                                        <p class="theme-p">Unable to display PDF file. <a
                                                href="/usdoorsdev/uploads\resources\pdf1689031405266.pdf">View</a>
                                            instead.</p>
                                    </object>
                                </td>
                                <td>Economical Commercial Roll-up Door</td>
                                <td>1000</td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include 'includes/footer.php';?>
    <?php include 'includes/script-links.php';?>
    <script>
    $(".resource-upload-form").submit((e) => {
        e.preventDefault()
        const uploadResouce = async () => {
            try {
                $(".loader").css("display", "flex")
                const pdfFile = $("#pdf-upload-resource")[0].files[0]
                const pdfFormData = new FormData();
                debugger
                pdfFormData.append("pdf", pdfFile);
                const pdfRes = await fetch('upload-pdf', {
                    method: 'POST',
                    body: pdfFormData
                });
                const pdfResData = await pdfRes.json()
                if (pdfRes.status == 200) {
                    debugger
                    console.log(pdfResData)
                    const formElem = $(".resource-upload-form")
                    $(formElem).find(`*[name="pdfUrl"]`).val("uploads\\resources\\" + pdfResData
                        .filename)
                    let formData = {}
                    $(formElem).find("*[name]").each((ind, inpElem) => {
                        debugger
                        formData[$(inpElem).attr("name")] = $(inpElem).val()
                    })
                    console.log(JSON.stringify([formData]))
                    const resourceRes = await fetch('upload-resource', {
                        method: 'POST',
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify([formData])
                    });
                    if (resourceRes.status == 200) {
                        alert("Resource has been Added...", "success")
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    } else {
                        alert(resourceRes.message, "danger")
                    }
                } else {
                    alert(pdfResData.message, "danger")
                }
                $(".loader").css("display", "none")

            } catch (error) {
                $(".loader").hide()
                console.error('Error:', error);
                alert(error.message, "danger")
            }
        }
        uploadResouce()
    })
    </script>
</body>

</html>