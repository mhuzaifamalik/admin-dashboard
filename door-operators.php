<!DOCTYPE html>
<html>

<head>
    <title> Dashboard Door Operators - US Doors Direct </title>
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
                    <h5 class="theme-h5">Add Door Operators</h5>
                    <form class="door-operator-upload-form">
                        <div class="row g-4">
                            <div class="col-xl-6 col-12">
                                <div class="card-inner">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Door Operator Name</h6>
                                                <input name="dooroperatortitle" type="text">
                                            </div>
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Features Title</h6>
                                                <input name="featurestitle" type="text">
                                            </div>
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Features Description</h6>
                                                <textarea name="featuresdescription" data-type="desc"></textarea>
                                            </div>
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Availablity Title</h6>
                                                <input name="availablitytitle" type="text">
                                            </div>
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Available Series (Use Seperator ",")</h6>
                                                <input name="availablityseries" data-type="array" type="text">
                                            </div>
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Availablity Description</h6>
                                                <textarea name="availablitydescription" data-type="desc"></textarea>
                                            </div>
                                            <div class="input-field">
                                                <h6 class="card-inner-h6">Category</h6>
                                                <select name="category" multiple>
                                                    <option value="Self-Storage Door Operators">Self-Storage Door
                                                        Operators</option>
                                                    <option value="Commercial Door Operators">Commercial Door Operators
                                                    </option>
                                                    <option value="Rolling Steel Door Operators">Rolling Steel Door
                                                        Operators</option>
                                                </select>
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
                                        <input type="file" class="thumbnail-upload" id="door-operator-image"
                                            accept="image/*">
                                        <label for="door-operator-image">
                                            <img class="thumbnail-placeholder"
                                                src="/dashboard/images/img-thumbnail-icon.png" alt="">
                                            <p class="theme-p"><span><i
                                                        class="fa-solid fa-arrow-up-from-bracket"></i></span> Drop your
                                                files here, or <span>Browse</span></p>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="theme-btn mt-3 ms-auto">Add Door Operator</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dashboard-card mt-3">
                    <h5 class="theme-h5">All Door Operators</h5>
                    <table class="table dashboard-table door-operator-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>title</th>
                                <th>Features Title</th>
                                <th>Features Description</th>
                                <th>Availablity Title</th>
                                <th>Availablity Description</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td><img src="/uploads\image1688775925095.jpg" alt=""></td>
                                <td>Easy Roller</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Secure and Reliable Transmitters: The TrioCode 128 remote control ensures
                                            secure and reliable access. It transmits on three frequencies to defeat
                                            radio interference and uses a 128-bit encryption protocol for the ultimate
                                            security.</li>

                                        <li>600N DC Motor.</li>

                                        <li>Soft Start/ Soft Close: Ramps speed up and down at the start and end of each
                                            cycle, therefore reducing stress on the door and the opener.</li>

                                        <li>Slim fit design.</li>

                                        <li>LED Courtesy Light.</li>

                                        <li>Intelligent Safety System (ISS): If contact is made with an obstruction
                                            while moving, the opener either stops or reverses the door to reduce the
                                            risk of injury or property damage.</li>

                                    </ul>
                                </td>
                                <td>Available for the following door models:</td>
                                <td>
                                    <ul>

                                        <li>650</li>

                                        <li>750</li>

                                        <li>850</li>

                                        <li>1000</li>

                                        <li>1100</li>

                                        <li>1950</li>

                                        <li>2000</li>

                                        <li>2500</li>

                                        <li>3100</li>

                                        <li>3400</li>

                                        <li>3652</li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                        <li>Series 650, 750 (Max width x height: 10&#39; x 9&#39;6&#34;)</li>

                                        <li>Series 850 (Max width x height: 12&#39; x 9&#39;6&#34;)</li>

                                        <li>Series 1000, 1100 (Max width x height: 10&#39; x 9&#39;6&#34;)</li>

                                        <li>Series 1950 (Max width x height: 12&#39; x 9&#39;6&#34;)</li>

                                        <li>Series 2000, 2500, 3100, 3400, 3652 (Max height 12&#39;6&#34; or 180 sq.
                                            ft.)</li>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1688777273337.png" alt=""></td>
                                <td>Shed Master</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Weather-resistant housing.</li>

                                        <li>Designed for exterior mounted doors (cover recommended), this opener has a
                                            weather resistant rating of IP24.</li>

                                        <li>Secure and reliable transmitters.</li>

                                        <li>The TrioCode™ 128 transmitter system ensures secure and reliable home
                                            access. It transmits on three frequencies to defeat radio interference, and
                                            uses a 128-bit encryption protocol for the ultimate in security.</li>

                                        <li>Keyed &amp; Electronic Lockout.</li>

                                        <li>As the Shed Master® can be installed in exposed locations, a keyed lockout
                                            is included to stop unwanted persons reaching over the fence and disengaging
                                            the door to manual mode. Also, the control panel can be similarly locked out
                                            to prevent unauthorized usage.</li>

                                        <li>This opener is top of its range with built-in intelligent features such as
                                            Intelligent Safety System and Door Profiling – meaning the door adjusts
                                            itself when opening and closing or if blocked.</li>

                                    </ul>
                                </td>
                                <td>Available for the following door models (Maximum size: 165 sq. ft.):</td>
                                <td>
                                    <ul>

                                        <li>850</li>

                                        <li>1950</li>

                                        <li>2000</li>

                                        <li>2500</li>

                                        <li>3100</li>

                                        <li>3400</li>

                                        <li>3652</li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                        <li>Series 850</li>

                                        <li>Series 1950</li>

                                        <li>Series 2000</li>

                                        <li>Series 2500</li>

                                        <li>Series 3100</li>

                                        <li>Series 3400</li>

                                        <li>Series 3652</li>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1689008290015.jpg" alt=""></td>
                                <td>Hiro</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Suitable for use on high rolling sheet doors</li>

                                        <li>Not only the most powerful opener in our range but it is also suitable for
                                            low side room installation</li>

                                        <li>Paves the way in control and connectivity delivering smart phone control in
                                            residential and commercial applications (as an additional upgrade)</li>

                                        <li>1400N Short-term peak force</li>

                                        <li>Soft Start / Soft Close</li>

                                        <li>Slim fit design</li>

                                        <li>LED Courtesy Light</li>

                                        <li>Intelligent Safety System</li>

                                        <li>Smart Phone Compatible</li>

                                        <li>110V Power required at every unit</li>

                                        <li>300 sq-ft. Max Opening (Non Windlocked Doors)</li>

                                        <li>236 sq-ft. Max Opening (Windlocked Doors)</li>

                                        <li>Battery Back-up Option Available</li>

                                        <li>Battery Back-up recommended doors &gt; 10&#39;-0&#34;H</li>

                                        <li>Wall Station and 2-Remote Controls included</li>

                                    </ul>
                                </td>
                                <td>Available for the following door models (Max Opening Height: 20&#39;)</td>
                                <td>
                                    <ul>

                                        <li>2000</li>

                                        <li>2500</li>

                                        <li>3100</li>

                                        <li>3400</li>

                                        <li>3652</li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                        <li>Series 2000</li>

                                        <li>Series 2500</li>

                                        <li>Series 3100</li>

                                        <li>Series 3400</li>

                                        <li>Series 3652</li>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1689009399489.png" alt=""></td>
                                <td>LiftMaster MH</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Medium Duty Commercial Door Operator</li>

                                        <li>Integrated Time to Close (ITT)</li>

                                        <li>Chain Hoist with Electric Interlock for Manual Operation in an Emergency
                                        </li>

                                        <li>High Starting Torque Motor with Overload Protection</li>

                                        <li>2 Year Warranty</li>

                                    </ul>
                                </td>
                                <td></td>
                                <td>
                                    <ul>

                                        <li></li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1689009846944.png" alt=""></td>
                                <td>LiftMaster H</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Industrial Duty Commercial Door Operator</li>

                                        <li>Features MyQ Technology to Enable Monitoring and Control of the Facility
                                            Operators Via Mobile App</li>

                                        <li>Safeguards Facility Access with Rolling Code Technology, Opening for
                                            Registered Devices Only</li>

                                        <li>Floor Level Chain Hoist for Manual Operation in Emergency</li>

                                    </ul>
                                </td>
                                <td></td>
                                <td>
                                    <ul>

                                        <li></li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1689010040139.png" alt=""></td>
                                <td>Manaras OPERA - MH</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Heavy Duty Industrial Gear Head Operator with Hoist</li>

                                        <li>Designed for 25 cycles/hour or 180 cycles/day</li>

                                        <li>Standard with Auxiliary Chain Hoist in the event of a power outage</li>

                                        <li>Standard with NEMA 1 Photo Eyes</li>

                                    </ul>
                                </td>
                                <td></td>
                                <td>
                                    <ul>

                                        <li></li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1689010306550.png" alt=""></td>
                                <td>Manaras Model OGH-6112</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Heavy Duty Industrial Gear Head Operator with Hoist</li>

                                        <li>Designed for 25 cycles/hour or 180 cycles/day</li>

                                        <li>Standard with Auxiliary Chain Hoist in the event of a power outage</li>

                                        <li>Standard with NEMA 1 Photo Eyes</li>

                                    </ul>
                                </td>
                                <td></td>
                                <td>
                                    <ul>

                                        <li></li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1689010741936.png" alt=""></td>
                                <td>LiftMaster GH</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Heavy Industrial Duty Commercial Door Operator</li>

                                        <li>Features MyQ Technology to Enable Monitoring and Control of Facility
                                            Operators Via Mobile App</li>

                                        <li>Lubricated Gear System and Numerous Custom Modifications</li>

                                        <li>Safeguards Facility Access with Rolling Code Technology, Opening for
                                            Registered Devices Only</li>

                                        <li>Can be Programmed to Close the Door After Set Amount of Time</li>

                                    </ul>
                                </td>
                                <td></td>
                                <td>
                                    <ul>

                                        <li></li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1689010808291.png" alt=""></td>
                                <td>LiftMaster FDC</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Rolling Steel Fire Door Commercial Door Operator</li>

                                        <li>Time Delayed Automatic Closing</li>

                                        <li>Auto Reset Overload Protection</li>

                                        <li>Monitored Battery Back-up</li>

                                        <li>UL Listed</li>

                                        <li>Nema 1 Enclosures</li>

                                    </ul>
                                </td>
                                <td></td>
                                <td>
                                    <ul>

                                        <li></li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                    </ul>
                                </td>
                            </tr>


                            <tr>
                                <td><img src="/uploads\image1689010844234.png" alt=""></td>
                                <td>LiftMaster FDCL</td>
                                <td>Features Include</td>
                                <td>
                                    <ul>

                                        <li>Rolling Steel Fire Door Commercial Door Operator</li>

                                        <li>Time Delayed Automatic Closing</li>

                                        <li>Auto Reset Overload Protection</li>

                                        <li>Monitored Battery Back-up</li>

                                        <li>UL Listed</li>

                                        <li>Nema 1 Enclosures</li>

                                    </ul>
                                </td>
                                <td></td>
                                <td>
                                    <ul>

                                        <li></li>

                                    </ul>
                                </td>
                                <!-- <td></td> -->
                                <td>
                                    <ul>

                                    </ul>
                                </td>
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
    $(".door-operator-upload-form").submit((e) => {
        e.preventDefault()
        const uploadDoorOperator = async () => {
            try {
                $(".loader").css("display", "flex")
                const imageFile = $("#door-operator-image")[0].files[0]
                const imgFormData = new FormData();
                imgFormData.append("image", imageFile);
                const thumbnailRes = await fetch('upload-thumbnail', {
                    method: 'POST',
                    body: imgFormData
                });
                const thumbnailData = await thumbnailRes.json()
                if (thumbnailRes.status == 200) {
                    console.log(thumbnailData)
                    const formElem = $(".door-operator-upload-form")
                    $(formElem).find(`*[name="thumbnail"]`).val("uploads\\" + thumbnailData.filename)
                    let formData = {}
                    $(formElem).find("*[name]").each((ind, inpElem) => {
                        const type = $(inpElem).data("type")
                        if (type) {
                            if (type == "array") {
                                formData[$(inpElem).attr("name")] = $(inpElem).val().split(",")
                            } else if (type == "desc") {
                                if ($(inpElem).val()) {
                                    formData[$(inpElem).attr("name")] = $(inpElem).val().split(
                                        "\n")
                                } else {
                                    formData[$(inpElem).attr("name")] = []
                                }
                            }
                        } else {
                            formData[$(inpElem).attr("name")] = $(inpElem).val()
                        }
                    })
                    console.log(JSON.stringify([formData]))
                    const doorOperatorRes = await fetch('upload-door-operator', {
                        method: 'POST',
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify([formData])
                    });
                    if (doorOperatorRes.status == 200) {
                        alert("Door Operator has been Added...", "success")
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    } else {
                        alert(doorOperatorRes.message, "danger")
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
        uploadDoorOperator()
    })
    </script>
</body>

</html>