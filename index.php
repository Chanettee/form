<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>63116503</title>

    <style>
        .bg {
            background-color: #eceff1;
        }

        .bg1 {
            background-color: #D6C3CE;
            padding: 0px 100px 0px 100px;


        }

        .bg2 {
            text-align: center;
        }
    </style>

</head>

<body class="bg">
    <div class="container">
        <p>
        <h1 class="bg2">แบบฟอร์มกรอกข้อมูลส่วนตัว</h1>
        </p><br />
        <div class="form-control bg1">
            <br>
            <form action="">
                <div class="form-group">
                    <label for="frmCard"> เลขบัตรประชาชน* : </label>
                    <input type="text" id="frmCard" name="card" placeholder="x-xxxx-xxxxx-x-xx"
                        onkeyup="autoTab(this,1)" required /><br />

                    <br />
                    <label for="frmpre">คำนำหน้านาม* : </label>
                    <select class="form-inline" id="frmpre" required>
                        <option value="" selected>--เลือก--</option>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                    </select>

                    <input type="text" id="frmName" class="form-inline" name="Fname" placeholder="ชื่อ" required />

                    <input type="text" id="frmLast" class="form-inline" name="Lname" placeholder="นามสกุล"
                        required /><br />

                    <br />
                    <label for="frmSex"> เพศ* : </label>
                    <input type="radio" name="gender" value=""> ชาย
                    <input type="radio" name="gender" value=""> หญิง
                    <input type="radio" name="gender" value=""> อื่นๆ <br />

                    <br />

                    <div class="col-md-3 mb-1">
                        <label for="frmrel">ศาสนา* : </label>
                        <select class="custom-select" id="frmrel" required>
                            <option value="" selected>---เลือกศาสนา--</option>
                            <option value="1">พุทธ</option>
                            <option value="2">อิสลาม</option>
                            <option value="3">คริสต์</option>
                        </select>
                    </div>

                    <br />
                    <div class="form-group">
                        <div class="row">

                            <label for="frmAdd"> ที่อยู่* : </label>

                            <div class="col-md-3">
                                <input type="number" id="number" class="form-control" placeholder="บ้านเลขที่" required />
                            </div>

                            <div class="col-md-3">
                                <input type="number" id="moo" class="form-control" placeholder="หมู่ที่" required />
                            </div>

                            <div class="col-md-3">
                                <input type="text" id="road" class="form-control" placeholder="ตำบล/แขวง" required />
                            </div>

                            <div class="col-md-3">
                                <input type="text" id="district" class="form-control" placeholder="ตำบล/แขวง" required />
                            </div>

                            <div class="col-md-3 mb-3">
                                <br/>
                                <input type="text" id="Sdistrict" class="form-control" placeholder="อำเภอ/เขต " require>
                            </div>

                            <div class="col-md-3 mb-3">
                                <br/>
                                <select class="form-control" id="frmprov" required>
                                    <option  value="" selected>-----เลือกจังหวัด------</option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                    <option value="ตรัง">ตรัง</option>
                                    <option value="สงขลา">สงขลา</option>
                                    <option value="กระบี่">กระบี่</option>
                                    <option value="พัทลุง">พัทลุง</option>
                                </select>
                            </div>

                            <div class="col-md-3 mb-3">
                                <br/>
                                <input type="text" id="zip" class="form-control" placeholder="รหัสไปรษณีย์" required />
                            </div> <br />

                        </div>
                    </div>

                    <br />
                    <div class="form-group row ">

                        <div class="col-md-4 mb-2">
                            <label for=""> โทรศัพท์บ้าน : </label>
                            <input type="text" class="form-control" id="phone" placeholder="xxx-xxx-xxxx" onkeyup="autoTab2(this,2)" />
                        </div>

                        <div class="col-md-4 mb-2">
                            <label for=""> โทรศัพท์มือถือ* : </label>
                            <input type="text" class="form-control" id="tel" placeholder="xx-xxx-xxxx" onkeyup="autoTab2(this,2)" required />
                        </div>

                    </div>

                    <div class="col-sm-6">
                        <br />
                        <label for="frmCours" class="checkbox" required> หลักสูตรที่สนใจ* : </label> <br />
                        <input type="checkbox" name="cours" value="IMI"> IMI (นวัตกรรมสารสนเทศทางการแพทย์) <br />
                        <input type="checkbox" name="cours" value="ITD"> ITD (เทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล)<br />
                        <input type="checkbox" name="cours" value="MTA"> MTA (เทคโนโลยีมัลติมีเดีย แอนิเมชัน
                        และเกม)<br />
                        <input type="checkbox" name="cours" value="DCM"> DCM (ดิจิทัลคอนเทนต์และสื่อ) <br />
                        <input type="checkbox" name="cours" value="COMM"> COMM (นิเทศศาสตร์) <br />
                    </div>

                    <br />
                    <div class="bg2">
                        <button class="btn btn-primary" type="submit" id="btnSubmit">Submit </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script type="text/javascript">
    function btnSubmit_click() {
        var idnum = $("#frmCard").val();
        
        var data = "{";
        data += '"idnum":"' + $("#frmCard").val() + '"';
        
        data += "}";     
        console.log(JSON.parse(data));
    }

    $(() => {
        $("#btnSubmit").click(btnSubmit_click);
    });

    function autoTab(obj) {
        var Card = ("_-____-_____-_-__");
        var Card_id = ("-");
        var returnText = ("");
        var obj_l = obj.value.length;
        var obj_l2 = obj_l - 1;
        for (i = 0; i < Card.length; i++) {
            if (obj_l2 == i && Card.charAt(i + 1) == Card_id) {
                returnText += obj.value + Card_id;
                obj.value = returnText;
            }
        }
        if (obj_l >= Card.length) {
            obj.value = obj.value.substr(0, Card.length);
        }
    }

    function autoTab2(obj2) {
        var Phone = new String("___-___-____");
        var Phone_id = new String("-");
        var returnText = new String("");
        var obj2_l = obj2.value.length;
        var obj2_l2 = obj2_l - 2;
        for (i = 0; i < Phone.length; i++) {
            if (obj2_l2 == i && Phone.charAt(i + 2) == Phone_id) {
                returnText += obj2.value + Phone_id;
                obj2.value = returnText;
            }
        }
        if (obj2_l >= Phone.length) {
            obj2.value = obj2.value.substr(0, Phone.length);
        }
    }
</script>

</html>
